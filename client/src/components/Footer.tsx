import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faFacebook, faTwitter, faInstagram } from '@fortawesome/free-brands-svg-icons';
import { faEnvelope } from '@fortawesome/free-solid-svg-icons';
import '../styles/footer.css';

const Footer = () => {
    return (
        <footer className="footer">
            <p>&copy; 1999 GigaBoulet.com. Tous droits réservés.</p>
            <div className="footer-icons">
                <a href="mailto:gigaboulet.com@gmail.com" aria-label="Email">
                    <FontAwesomeIcon icon={faEnvelope} />
                </a>
                <a href="https://facebook.com/gigaboulet.Com" aria-label="Facebook">
                    <FontAwesomeIcon icon={faFacebook} />
                </a>
                <a href="https://x.com/gigaboulet.com" aria-label="Twitter">
                    <FontAwesomeIcon icon={faTwitter} />
                </a>
                <a href="https://instagram.com/gigaboulet.com" aria-label="Instagram">
                    <FontAwesomeIcon icon={faInstagram} />
                </a>
            </div>
        </footer>
    );
};

export default Footer;
