import Joi from "joi";

export interface PostValidation {
  title: string;
  summary: string;
  content: string;
  imageUrl: string;
  date_created?: Date;
  category_id?: number;
}

export const postValidation = Joi.object<PostValidation>({
  title: Joi.string().required(),
  summary: Joi.string().required(),
  content: Joi.string().required(),
  imageUrl: Joi.string().required(),
  date_created: Joi.date().optional(),
  category_id: Joi.number().optional(),
});

export interface ListValidation {
  page?: number;
  limit?: number;
}

export const listValidation = Joi.object<ListValidation>({
  page: Joi.number().min(1).optional(),
  limit: Joi.number().min(1).optional(),
});