<?php 
    header('Content-type: text/css; charset:UTF-8'); 
?>
:root {
    --white-color: #ffff;
    --black-color: #000;
    --text-color: #333;
    --header-height: 140px;
    --navbar-height: 36.8px;
    --header-with-search-height: calc(var(--header-height) - var(--navbar-height))
}

* {
    box-sizing: inherit;
}

html {
    font-size: 62.5%;
    line-height: 1.6rem;
    /* 1rem=16px nhưng ở trên là 1.6rem = 16px do fontsize là 62.5% */
    /* line height là độ cao phông chữ */
    font-family: 'Roboto', sans-serif;
    /* thể hiện kiểu chữ roboto trên gg */
    /* sans-serif là chủng chữ không có chân ko phải kiểu chữ */
    box-sizing: border-box;
    text-decoration: none;
}

html {
    background-color: rgba(255, 255, 252, 1)
}

.btn {
    min-width: 115px;
    height: 39px;
    right: 9px;
    cursor: pointer;
    font-weight: 500;
    font-size: 1.1rem;
    border-radius: 2px;
    text-align: center;
}

h4 {
    color: var(--text-color);
}

.btn.btn-normal:hover {
    background-color: rgba(0, 0, 0, 0.5);
}

.btn.btn--primary {
    color: white;
    background-color: rgb(253, 70, 70);
    outline-color: rgb(19, 199, 139);
}

.btn.btn--disable {
    cursor: default;
    filter: brightness(80%);
    /* dùng để giảm độ sáng */
    background-color: #777;
}


/* select */

.select-input {
    position: relative;
    width: 70px;
    height: 36px;
    display: flex;
    border-radius: 3px;
    background-color: var(--white-color);
    margin-left: 25px;
    align-items: center;
    justify-content: space-evenly;
}

.select-input-list {
    position: absolute;
    left: 0;
    right: 0;
    top: 11px;
    border-radius: 3px;
    background-color: var(--white-color);
    list-style: none;
    padding: 9px 12px;
    width: 230%;
    display: none;
}

.footer {
    height: 125px;
    width: 100%;
    background-image: linear-gradient(0deg, rgb(112, 176, 228), rgb(63, 123, 146));
    bottom: 0;
}

.footer_help-msg {
    font-size: 1.9rem;
    display: flex;
    height: 36px;
    justify-content: center;
    text-align: center;
    align-items: flex-end;
}

.footer_help-img {
    display: flex;
    justify-content: center;
}

.footer_help-img-sdt,
.footer_navbar-link-icon1,
.footer_navbar-link-icon2,
.footer_navbar-icon1,
.footer_navbar-icon2 {
    font-size: 2.3rem;
    margin: 17px;
}

.footer_help-img-sdt {
    margin-top: 32px;
    color: rgb(28, 87, 87);
}

.footer_navbar-icon2 {
    color: rgb(187, 53, 75);
}