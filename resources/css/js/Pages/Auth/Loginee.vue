
<template>
  <form @submit.prevent="submitForm">
    <div class="login">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="main-dashboard">
            <img class="background" src="Assets/img/background.png" alt="Background" />
          </div>
          <div class="rectangle"></div>
          <div class="bg"></div>
          <h1 class="welcome-students">
            <span class="text-wrapper">Welcome </span>
            <span class="span">Students </span>
          </h1>

          <a href="#" @click="googleLogin" class="login-with-google">
            <div class="group">
              <img class="search" src="Assets/img/search-1.svg" alt="Search Icon" />
              <span class="div">Login with Google</span>
            </div>
          </a>

          <div class="or">
            <img class="line" src="Assets/img/line-1.svg" alt="Line" />
            <img class="img" src="Assets/img/line-2.svg" alt="Line" />
            <div class="text-wrapper-2">OR</div>
          </div>

          <div class="text-wrapper-3">
            <a href="#">Forgot Password?</a>
          </div>

          <div class="email">
            <div class="overlap-group">
              <img class="vector" src="Assets/img/vector.svg" alt="Email Icon" />
              <label class="text-wrapper-4" for="email">Email</label>
              <input 
                type="email" 
                id="email" 
                placeholder="example@gmail.com" 
                class="text-wrapper-5" 
                v-model="email" 
                required
              />
            </div>
          </div>

          <div class="password">
            <div class="overlap-group">
              <img class="group-2" src="Assets/img/group.png" alt="Password Icon" />
              <label class="text-wrapper-4" for="password">Password</label>
              <input 
                type="password" 
                id="password" 
                class="text-wrapper-6" 
                v-model="password" 
                required
              />
            </div>
          </div>

          <button class="button" type="submit">
            <div class="overlap-2">
              <div class="rectangle-2"></div>
              <div class="text-wrapper-7">Login</div>
            </div>
          </button>

          <div class="remember-me">
            <input 
              type="checkbox" 
              id="remember-me" 
              class="check" 
              v-model="rememberMe" 
            />
            <label for="remember-me" class="text-wrapper-8">Remember me</label>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";

const email = ref("");
const password = ref("");
const rememberMe = ref(false);

const submitForm = async () => {
  try {
    const response = await axios.post("/api/login", {
      email: email.value,
      password: password.value,
      remember: rememberMe.value,
    });

    if (response.data.success) {
      alert("Login successful!");
      window.location.href = "/dashboard";
    } else {
      alert(response.data.message || "Login failed!");
    }
  } catch (error) {
    console.error(error);
    alert("An error occurred during login.");
  }
};

const googleLogin = () => {
  window.location.href = "/auth/google";
};
</script>




  

<style scoped>
    body {
  margin: 0;
  padding: 0;
}

.login {
  background-color: #f4f4f4;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.login .overlap-wrapper {
  background-color: #f4f4f4;
  overflow: hidden;
  width: 1920px;
  height: 1024px;
}

.login .overlap {
  position: relative;
  width: 1987px;
  height: 1300px;
  left: -67px;
}

.login .main-dashboard {
  position: absolute;
  width: 1920px;
  height: 1300px;
  top: 0;
  left: 67px;
}

.login .background {
  position: absolute;
  width: 1920px;
  height: 1024px;
  top: 0;
  left: 0;
}

.login .rectangle {
  width: 1920px;
  height: 1041px;
  left: 67px;
  background-color: #0000004c;
  position: absolute;
  top: 0;
}

.login .bg {
  position: absolute;
  width: 788px;
  height: 940px;
  top: 42px;
  left: 1040px;
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0px 0px 4px #00000014;
}

.login .welcome-students {
  position: absolute;
  width: 483px;
  top: 205px;
  left: 1109px;
  font-family: "Poppins", Helvetica;
  font-weight: 400;
  color: var(--black);
  font-size: 36px;
  letter-spacing: 0;
  line-height: 48.8px;
}

.login .text-wrapper {
  font-weight: 500;
  color: #2e2e2e;
}

.login .span {
  font-weight: 900;
  color: #3182ce;
  font-size: 46px;
  line-height: 62.3px;
}

.login .login-with-google {
  position: absolute;
  width: 681px;
  height: 78px;
  top: 348px;
  left: 1109px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0px 4px 15px #0000001c;
}

.login .group {
  position: relative;
  width: 195px;
  height: 32px;
  top: 25px;
  left: 245px;
}

.login .search {
  position: absolute;
  width: 32px;
  height: 32px;
  top: 0;
  left: 0;
}

.login .div {
  position: absolute;
  top: 5px;
  left: 51px;
  font-family: "Poppins", Helvetica;
  font-weight: 400;
  color: var(--black);
  font-size: 16px;
  letter-spacing: 0;
  line-height: 21.7px;
  white-space: nowrap;
}

.login .or {
  position: absolute;
  width: 675px;
  height: 22px;
  top: 456px;
  left: 1107px;
}

.login .line {
  width: 292px;
  left: 0;
  position: absolute;
  height: 1px;
  top: 10px;
  object-fit: cover;
}

.login .img {
  width: 288px;
  left: 385px;
  position: absolute;
  height: 1px;
  top: 10px;
  object-fit: cover;
}

.login .text-wrapper-2 {
  position: absolute;
  top: 0;
  left: 327px;
  font-family: "Poppins", Helvetica;
  font-weight: 400;
  color: var(--black);
  font-size: 16px;
  letter-spacing: 0;
  line-height: 21.7px;
  white-space: nowrap;
}

.login .text-wrapper-3 {
  position: absolute;
  top: 711px;
  left: 1639px;
  font-family: "Poppins", Helvetica;
  font-weight: 400;
  color: var(--primary-color);
  font-size: 16px;
  letter-spacing: 0;
  line-height: 21.7px;
  white-space: nowrap;
}

.login .email {
  position: absolute;
  width: 675px;
  height: 77px;
  top: 514px;
  left: 1114px;
}
.login input {
  position: absolute;
  border: none !important;
  width: 520px;
  height: auto;
  background: transparent;
  outline: none !important;
}

.login .overlap-group {
  position: relative;
  width: 671px;
  height: 77px;
  background-color: #ebebeb;
  border-radius: 8px;
}

.login .vector {
  position: absolute;
  width: 30px;
  height: 24px;
  top: 29px;
  left: 23px;
}

.login .text-wrapper-4 {
  position: absolute;
  top: 15px;
  left: 82px;
  font-family: "Poppins", Helvetica;
  color: var(--black);
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 0;
  line-height: 16.3px;
  white-space: nowrap;
}

.login .text-wrapper-5 {
  position: absolute;
  top: 37px;
  left: 82px;
  font-family: "Poppins", Helvetica;
  color: var(--black);
  font-size: 20px;
  letter-spacing: 0;
  line-height: 21.7px;
  white-space: nowrap;
}

.login .password {
  position: absolute;
  width: 675px;
  height: 77px;
  top: 611px;
  left: 1114px;
}

.login .group-2 {
  position: absolute;
  width: 27px;
  height: 27px;
  top: 27px;
  left: 26px;
}

.login .text-wrapper-6 {
  position: absolute;
  top: 43px;
  left: 82px;
  font-family: "Poppins", Helvetica;
  font-weight: 700;
  color: var(--black);
  font-size: 16px;
  letter-spacing: 0;
  line-height: 21.7px;
  white-space: nowrap;
}

.login .bi-eye-fill {
  position: absolute;
  width: 22px;
  height: 22px;
  top: 32px;
  left: 628px;
}

.login .button {
  all: unset;
  box-sizing: border-box;
  position: absolute;
  width: 673px;
  height: 77px;
  top: 758px;
  left: 1114px;
}

.login .overlap-2 {
  position: relative;
  width: 671px;
  height: 77px;
  border-radius: 8px;
}

.login .rectangle-2 {
  width: 671px;
  height: 77px;
  left: 0;
  background-color: #3182ce;
  border-radius: 8px;
  position: absolute;
  top: 0;
  transition: 0.2ease;
}

.login .rectangle-2:hover{
  background-color: #175086;

}

.login .text-wrapper-7 {
  position: absolute;
  top: 27px;
  left: 313px;
  font-family: "Poppins", Helvetica;
  font-weight: 600;
  color: #ffffff;
  font-size: 16px;
  letter-spacing: 0;
  line-height: 21.7px;
  white-space: nowrap;
}

.login .remember-me {
  position: absolute;
  width: 155px;
  height: 22px;
  top: 712px;
  left: 1116px;
}

.login .text-wrapper-8 {
  position: absolute;
  top: 0;
  left: 33px;
  font-family: "Poppins", Helvetica;
  font-weight: 400;
  color: var(--black);
  font-size: 16px;
  letter-spacing: 0;
  line-height: 21.7px;
  white-space: nowrap;
}

.login .check {
  position: absolute;
  width: 18px;
  height: 18px;
  top: 2px;
  left: 0;
  background-color: #ebebeb;
  border-radius: 4px;
  border: 1px solid;
  border-color: #d9d9d9;
}

.login .new-design {
  position: absolute;
  width: 1531px;
  height: 80px;
  top: 45px;
  left: 138px;
}

.login .div-2 {
  position: relative;
  height: 80px;
}

.login .pages {
  position: absolute;
  width: 302px;
  height: 36px;
  top: 13px;
  left: 1229px;
}

.login .sign-in {
  position: absolute;
  width: 76px;
  height: 36px;
  top: 0;
  left: 226px;
  border-radius: 12px;
}

.login .profile {
  display: flex;
  width: 76px;
  height: 36px;
  align-items: center;
  justify-content: center;
  padding: 0px 8px;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 12px;
}

.login .width-structure {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
  flex: 0 0 auto;
}

.login .min-width {
  display: inline-flex;
  align-items: flex-start;
  padding: 0px 12px;
  position: relative;
  flex: 0 0 auto;
}

.login .content {
  position: relative;
  width: 1px;
  height: 1px;
  margin-right: -1px;
  background-color: var(--blackampwhitewhite);
}

.login .logo {
  display: inline-flex;
  align-items: center;
  gap: 13px;
  position: absolute;
  top: -30px;
  left: -50px;
}

.login .overlap-group-wrapper {
  position: relative;
  width: 80px;
  height: 80px;
}

.login .ellipse {
  position: absolute;
  width: 78px;
  height: 77px;
  top: 1px;
  left: 1px;
  background-color: #ffffff;
  border-radius: 38.75px;
}

.login .logo-2 {
  position: absolute;
  width: 80px;
  height: 80px;
  top: 0;
  left: 0;
}

.login .div-wrapper {
  position: absolute;
  width: 537px;
  height: 60px;
  top: -20px;
  left: 50px;
}

.login .p {
  position: absolute;
  width: 535px;
  height: 60px;
  top: 0;
  left: 0;
  font-family: "Abhaya Libre ExtraBold-Regular", Helvetica;
  font-weight: 400;
  color: var(--blackampwhitewhite);
  font-size: 36px;
  letter-spacing: -0.72px;
  line-height: 54px;
  white-space: nowrap;
}

.login .logo-wrapper {
  position: absolute;
  width: 457px;
  height: 461px;
  top: 646px;
  left: 0;
  background-color: #d9d9d9;
  border-radius: 228.5px/230.5px;
  opacity: 0.37;
}

.login .logo-3 {
  position: absolute;
  width: 390px;
  height: 378px;
  top: 0;
  left: 67px;
}

/* Existing CSS here */

/* Responsive styles */
@media (max-width: 768px) {
  .login {
      padding: 20px; /* Adjust padding */
      width: 90%; /* Ensure form fits smaller screens */
  }

  .welcome-students {
      font-size: 1.5em; /* Smaller font size */
  }

  .rectangle, .background {
      display: none; /* Hide if necessary, or adjust */
  }

  .button {
      width: 100%; /* Full width for buttons */
  }
}

@media (max-width: 1206px) {
  .login {
      width: 67%; /* More width for very small screens */
  }

  .text-wrapper-4 {
      font-size: 0.8em; /* Smaller labels */
  }
}

</style>
  

