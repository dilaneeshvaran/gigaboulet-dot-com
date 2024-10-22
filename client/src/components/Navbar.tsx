import React from 'react';
import { Link } from 'react-router-dom';
import '../styles/navbar.css';


const Navbar: React.FC = () => {

    return (
        <nav>
            <Link to="/">Accueil</Link>
            <Link to="/blog">Blog</Link>
            <Link to="/">Contact</Link>
        </nav>
    );
};

export default Navbar;
