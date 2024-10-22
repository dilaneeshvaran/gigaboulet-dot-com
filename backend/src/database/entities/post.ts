import { Entity, PrimaryGeneratedColumn, Column } from "typeorm";

@Entity()
export class Post {
    @PrimaryGeneratedColumn()
    id!: number;

    @Column()
    title: string;
    
    @Column()
    summary: string;

    @Column()
    content: string;

    @Column()
    imageUrl: string; // hashed password

    @Column()
    date_created?: Date;

    @Column()
    category_id?: number;

    constructor(
        title: string,
        summary: string,
        content: string,
        imageUrl: string,
        date_created: Date,
        category_id: number
    ) {
        this.title = title;
        this.summary = summary;
        this.content = content;
        this.imageUrl = imageUrl;
        this.date_created = date_created;
        this.category_id = category_id;
    }
}
