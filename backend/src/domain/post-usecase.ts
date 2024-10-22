import { DataSource } from "typeorm";
import { Post } from "../database/entities/post";

export interface ListPost {
    limit: number;
    page: number;
}

export class PostUsecase {
    constructor(private readonly db: DataSource) {}

    async listPosts(
        listPost: ListPost
    ): Promise<{ posts: Post[]; totalCount: number }> {
        const query = this.db.createQueryBuilder(Post, "posts");
        
        query.skip((listPost.page - 1) * listPost.limit);
        query.take(listPost.limit);
    
        const [posts, totalCount] = await query.getManyAndCount();
        return {
            posts,
            totalCount,
        };
    }

    async getPostById(postId: number): Promise<Post | null> {
        try {
            const query = this.db.createQueryBuilder(Post, "posts");
            query.where("posts.id = :id", { id: postId });
            const post = await query.getOne();
            if (!post) {
                console.warn(`Post not found for ID: ${postId}`);
                return null;
            }
            return post;
        } catch (error) {
            console.error(`Error fetching post by ID: ${postId}`, error);
            return null;
        }
    }

    async getPostsByCategory(categoryId: number): Promise<Post[]> {
        try {
            const query = this.db.createQueryBuilder(Post, "posts");
            query.where("posts.category_id = :categoryId", { categoryId });
            const posts = await query.getMany();
            return posts;
        } catch (error) {
            console.error(`Error fetching posts by category ID: ${categoryId}`, error);
            return [];
        }
    }
}