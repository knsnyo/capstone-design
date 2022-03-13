import "./login.css";

export default function Login() {
  return (
    <div className="login">
      <span className="loginTitle">Login</span>
      <form className="loginForm" onSubmit>
        <label>ID</label>
        <input type="text" className="loginInput" placeholder="Enter your ID" />
        <label>PASSWORD</label>
        <input
          type="passsword"
          className="loginInput"
          placeholder="Enter your PASSWORD"
        />
				<button className="loginButton" type="submit">
					Login
				</button>
      </form>
    </div>
  );
}
