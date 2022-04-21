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
  --main-margin-sides: 30px;
  --second-margin-sides: 15px;
}

section {
  margin-top: 50px;

}
</style>
