<template>
    <a href="whatsapp://send?text=Hola, soy de ... Estoy interesado en ...">
        <div class="whatsapp-container">
            <img class="logo" src="@/assets/img/whatsapp.png">
        </div>
    </a>
    <div class="content">
        <div class="box">
            <img class="logo" src="@/assets/img/logo.png">
        </div>
        <div class="social box">
            <p class="box-title">Social</p>
            <a href="https://www.instagram.com/flipper_pool">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/piscinasflipperpool">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </div>
        <div class="box">
            <p class="box-title">Horario</p>
            <p>09:00 - 21:00</p>
            <p>Fines de semana cerrado</p>
        </div>
        <div class="box">
            <p class="box-title">Información</p>
            <p><a href="mailto:info@flipperpool.com" target="_blank">info@flipperpool.com</a></p>
            <p><a href="tel:+34661260491">661-260-491</a></p>
        </div>
        <div class="box">
            <a class="btn">Contactar</a>
            <a class="btn">Privacidad</a>
        </div>
    </div>

</template>

<style scoped>

.whatsapp-container {
    position: fixed;
    bottom: 2vw;
    right: 2vw;
}

.whatsapp-container img {
    min-height: 80px;
    height: 7vw;
    cursor: pointer;
}

p {
    margin: 5px;
}

.box {
    margin: 15px;
}

.box-title {
    font-family: Default-Bold;
    margin: 15px;
}

.content {
    margin-top: 50px;
    background-color: var(--main-color);
    padding: 25px var(--main-margin-sides);
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    text-align: center;
    align-items: center;
}

.logo {
    height: 40px;
    cursor: pointer;
}

i {
    color: black;
    margin: 5px;
}

.btn {
    
    display: block;
    border: 1px solid;
    padding: 5px 20px;
    cursor: pointer;
    margin: 10px;
}

.btn:hover {
    
    background-color: #fff;
    transition: all 0.5s;
    border-color: var(--main-color);
    color: var(--main-color)
}
</style> 