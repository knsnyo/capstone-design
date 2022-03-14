import { useState } from "react";
import "./login.css";

export default function Login() {
  const [id, setID] = useState("");
  const [password, setPassword] = useState("");
  
  const loginHandler = (e) => {
    e.preventDefault();
    console.log(id, password);
  }

  return (
    <div className="login">
      <span className="loginTitle">Login</span>
      <form className="loginForm" onSubmit={loginHandler}>
        <label>ID</label>
        <input
          type="text"
          className="loginInput"
          placeholder="Enter your ID"
          onChange={(e) => setID(e.target.value)}
        />
        <label>PASSWORD</label>
        <input
          type="passsword"
          className="loginInput"
          placeholder="Enter your PASSWORD"
          onChange={(e) => setPassword(e.target.value)}
        />
        <button
          className="loginButton"
          type="submit"
        >
          Login
        </button>
      </form>
    </div>
  );
}
