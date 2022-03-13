import "./navbar.css";
import { Link } from "react-router-dom";

export default function Navbar() {
  const user = true;
  return (
    <div className="navbar">
      <div className="navbarLeft">
        <ul className="navbarList">
          <li className="navbarListItem">
            <Link to="/" className="link">
              Home
            </Link>
          </li>
        </ul>
      </div>
      <div className="navbarCenter">
        <ul className="navbarList">
          <li className="navbarListItem">
            <Link to="/" className="link">
              menu 1
            </Link>
          </li>
          <li className="navbarListItem">
            <Link to="/" className="link">
              menu 2
            </Link>
          </li>
          <li className="navbarListItem">
            <Link to="/" className="link">
              menu 3
            </Link>
          </li>
        </ul>
      </div>
      <div className="navbarRight">
        {user && (
          <ul className="navbarList">
            <li className="navbarListItem">
              <Link to="/login" className="link">
                LOGIN
              </Link>
            </li>
            <li className="navbarListItem">
              <Link to="/register" className="link">
                REGISTER
              </Link>
            </li>
          </ul>
        )}
        {!user && (
          <ul className="navbarList">
            <li className="navbarListItem">
              <Link to="/" className="link">
                MyPage
              </Link>
            </li>
            <li className="navbarListItem">LOGOUT</li>
          </ul>
        )}
      </div>
    </div>
  );
}
