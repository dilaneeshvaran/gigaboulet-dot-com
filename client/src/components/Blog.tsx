import React, { useState, useEffect } from 'react';
import '../styles/blog.css';
import Footer from './Footer';

export interface Post {
    id: number;
    title: string;
    summary: string;
    content: string;
    imageUrl: string;
    description: string;
    date_created: string;
    category_id: number;
}

export interface Category {
    id: number;
    name: string;
}

const Blog: React.FC = () => {
    const [posts, setPosts] = useState<Post[]>([]);
    const [categories, setCategories] = useState<Category[]>([]);
    const [selectedCategory, setSelectedCategory] = useState<number | null>(null);

    useEffect(() => {
        fetch('http://localhost:3000/posts')
            .then(response => response.json())
            .then(data => {
                console.log('Fetched posts:', data);
                if (data && Array.isArray(data)) {
                    setPosts(data);
                } else {
                    console.error('Unexpected data format:', data);
                }
            })
            .catch(error => console.error('Error fetching posts:', error));

        fetch('http://localhost:3000/categories')
            .then(response => response.json())
            .then(data => {
                console.log('Fetched categories:', data);
                if (data && Array.isArray(data)) {
                    setCategories(data);
                } else {
                    console.error('Unexpected data format:', data);
                }
            })
            .catch(error => console.error('Error fetching categories:', error));
    }, []);

    const handleCategoryClick = (categoryId: number) => {
        setSelectedCategory(categoryId);
    };

    const filteredPosts = selectedCategory
        ? posts.filter(post => post.category_id === selectedCategory)
        : posts;

    return (
        <div className="blog-container">
            <aside className="sidebar">
                <h2>Categories</h2>
                <ul>
                    {categories.map(category => (
                        <li key={category.id} onClick={() => handleCategoryClick(category.id)}>
                            {category.name}
                        </li>
                    ))}
                </ul>
            </aside>
            <main className="blog-main">
                <h1>Blog</h1>
                {filteredPosts.length === 0 ? (
                    <p>No posts available.</p>
                ) : (
                    filteredPosts.map(post => (
                        <div key={post.id} className="post">
                            <img src={post.imageUrl} alt={post.title} />
                            <h2>{post.title}</h2>
                            <p>{post.summary}</p>
                            <a href="#">Read more</a>
                        </div>
                    ))
                )}
            </main>
            <Footer />
        </div>
    );
};

export default Blog;