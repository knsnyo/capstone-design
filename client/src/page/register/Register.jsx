import "./register.css";

export default function Register() {
  return (
    <div className="register">
      <span className="registerTitle">Register</span>
      <form className="registerForm" onSubmit>
        <label>ID</label>
        <input
          type="text"
          className="registerInput"
          placeholder="Enter your ID"
        />
        <label>PASSWORD</label>
        <input
          type="passsword"
          className="registerInput"
          placeholder="Enter your PASSWORD"
          name="password"
        />
        <button className="registerButton" type="submit">
          register
        </button>
      </form>
    </div>
  );
}
