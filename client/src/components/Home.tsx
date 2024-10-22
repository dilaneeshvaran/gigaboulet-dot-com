import React, { useState, useEffect } from 'react';
import '../styles/home.css';
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

const Home: React.FC = () => {
    const [posts, setPosts] = useState<Post[]>([]);
    const [selectedPost, setSelectedPost] = useState<Post | null>(null);
    const [currentSlide, setCurrentSlide] = useState(0);

    useEffect(() => {
        fetch('http://localhost:3000/posts')
            .then(response => response.json())
            .then(data => {
                console.log('Fetched data:', data);
                if (data && Array.isArray(data)) {
                    setPosts(data);
                } else {
                    console.error('Unexpected data format:', data);
                }
            })
            .catch(error => console.error('Error fetching posts:', error));
    }, []);

    const handleItemClick = (post: Post) => {
        console.log('Post clicked:', post);
        setSelectedPost(post);
    };

    const handleCloseModal = () => {
        setSelectedPost(null);
    };

    return (
        <div className="home-container">
            <h1>Gigaboulet</h1>
            <p>Welcome to Gigaboulet.com, your ultimate source for the latest reviews on tech gadgets and new technologies.</p>
            {posts.length === 0 ? (
                <p>Loading...</p>
            ) : (
                <div className="slideshow">
                    {posts.map((post, index) => (
                        <div
                            key={post.id}
                            className={`slide ${index === currentSlide ? 'active' : ''}`}
                            onClick={() => handleItemClick(post)}
                        >
                            <img src={post.imageUrl} alt={post.title} />
                            <h2>{post.title}</h2>
                            <p>{post.summary}</p>
                        </div>
                    ))}
                </div>
            )}

            {selectedPost && (
                <div className="modal" onClick={handleCloseModal}>
                    <div className="modal-content" onClick={e => e.stopPropagation()}>
                        <span className="close-button" onClick={handleCloseModal}>&times;</span>
                        <h2>{selectedPost.title}</h2>
                        <img src={selectedPost.imageUrl} alt={selectedPost.title} />
                        <p>{selectedPost.content}</p>
                    </div>
                </div>
            )}
            <Footer />
        </div>
    );
};

export default Home;