import express, { Request, Response } from "express";
import { AppDataSource } from "../../database/database";
import { Post } from "../../database/entities/post";
import { PostUsecase } from "../../domain/post-usecase";

export const initPostRoutes = (app: express.Express) => {
  app.get("/health", (req: Request, res: Response) => {
    res.send({ message: "hello world" });
  });

  app.get("/posts", async (req: Request, res: Response) => {
    const { limit = 20, page = 1 } = req.query;

    try {
      const postUsecase = new PostUsecase(AppDataSource);
      const listPost = await postUsecase.listPosts({
        limit: Number(limit),
        page: Number(page),
      });
      res.status(200).send(listPost);
    } catch (error) {
      console.log(error);
      res.status(500).send({ error: "Internal server error" });
    }
  });

  app.get("/posts/:postId", async (req: Request, res: Response) => {
    const { postId } = req.params;

    try {
      const postUsecase = new PostUsecase(AppDataSource);
      const post = await postUsecase.getPostById(Number(postId));

      if (post) {
        res.status(200).send(post);
      } else {
        res.status(404).send({ error: "Post not found" });
      }
    } catch (error) {
      console.log(error);
      res.status(500).send({ error: "Internal server error" });
    }
  });

  app.get("/posts/category/:categoryId", async (req: Request, res: Response) => {
    const { categoryId } = req.params;

    try {
      const postUsecase = new PostUsecase(AppDataSource);
      const posts = await postUsecase.getPostsByCategory(Number(categoryId));

      res.status(200).send(posts);
    } catch (error) {
      console.log(error);
      res.status(500).send({ error: "Internal server error" });
    }
  });
};