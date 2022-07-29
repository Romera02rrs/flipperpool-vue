<template>
  <router-view />
</template>

<style>
@font-face {
  font-family: "Default-Regular";
  src: url("@/assets/fonts/Roboto-Regular.ttf") format("truetype");
  font-style: normal;
  font-weight: normal;
}

@font-face {
  font-family: "Default-Bold";
  src: url("@/assets/fonts//Roboto-Bold.ttf") format("truetype");
  font-style: normal;
  font-weight: bold;
}

@font-face {
  font-family: "Default-Light";
  src: url("@/assets/fonts//Roboto-Light.ttf") format("truetype");
  font-style: normal;
  font-weight: lighter;
}

@font-face {
  font-family: "Default-ExtraBold";
  src: url("@/assets/fonts//Roboto-Medium.ttf") format("truetype");
  font-style: normal;
  font-weight: lighter;
}

*{
  font-family: Default-Regular;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

:root {
  --main-color: #8cccff;
  --main-faded-color: #8cccffaa;
  --main-margin-sides: 30px;
  --second-margin-sides: 15px;

  --font-size-6: 10px;
  --font-size-5: 15px;
  --font-size-4: 24px;
  --font-size-3: 32px;
  --font-size-2: 50px;
  --font-size-1: 65px;
}


@media (min-width: 768px){
 :root {
  --font-size-6: 13px;
  --font-size-5: 18px;
  --font-size-4: 27px;
  --font-size-3: 35px;
  --font-size-2: 55px;
  --font-size-1: 70px;
  }
}

@media (min-width: 992px){
 :root {
  --font-size-6: 17px;
  --font-size-5: 21px;
  --font-size-4: 30px;
  --font-size-3: 38px;
  --font-size-2: 61px;
  --font-size-1: 75px;
  }
}

@media (min-width: 1200px){
 :root {
  --font-size-6: 21px;
  --font-size-5: 24px;
  --font-size-4: 33px;
  --font-size-3: 41px;
  --font-size-2: 65px;
  --font-size-1: 80px;
  }
}

@media (min-width: 1400px){
 :root {
  --font-size-6: 25px;
  --font-size-5: 27px;
  --font-size-4: 36px;
  --font-size-3: 44px;
  --font-size-2: 67px;
  --font-size-1: 83px;
  }
}

section {
  margin-top: 50px;

}
</style>
