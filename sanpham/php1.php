<?php 
    header('Content-type: text/css; charset:UTF-8'); 
?>
html {
    font-size: 82.5%;
    line-height: 1.6rem;
    /* 1rem=16px nhưng ở trên là 1.6rem = 16px do fontsize là 62.5% */
    /* line height là độ cao phông chữ */
    font-family: 'Roboto', sans-serif;
    /* thể hiện kiểu chữ roboto trên gg */
    /* sans-serif là chủng chữ không có chân ko phải kiểu chữ */
    box-sizing: border-box;
    text-decoration: none;
}
.container-fluid{
    width: 95%;
    margin: auto;
}
.card{
    width: 100%;
}
.card-header{
    display : flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 70px;
    background-color: rgba(47, 47, 47, 0.7);
    border: 1px solid;

}
.card-body{
    width: 100%;
    border: 1px solid;
    position: relative;
}
table{
    width: 100%;
    border-collapse: collapse;
}
.thead-dark{
    width: 100%;
    background-color: rgba(19, 17, 17, 0.46);
}
tr{
    width: 100%;
    display: flex;
    text-align: center;
    justify-content: space-around;
    border: 1px solid black;
}
th,td {
    width: calc(100%/9);
    max-height: 120px;
    text-align: center;
    margin: auto;
}
.btn{
    display: flex;
    position: absolute;
    width: 100px;
    height: 30px;
    background-color: rgb(5, 132, 132);
    color: #fff;
    border-radius: 3px;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    top: calc(100% + 9px);
    right: 17px;
    margin: 10px;
}
.btn:hover{
    background-color: rgb(8, 169, 169);
    cursor: pointer;
}
.btn-2{
    display: flex;
    position: absolute;
    width: 100px;
    height: 30px;
    background-color: rgb(5, 132, 132);
    color: #fff;
    border-radius: 3px;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    top: calc(100% + 9px);
    right: 117px;
    margin: 10px;
}
.btn-2:hover{
    background-color: rgb(8, 169, 169);
    cursor: pointer;
}
.form-group{
    display: flex;
    poisition: absolute;
    flex-wrap: wrap;
    width: 100%;
    max-height: 150px;
    min-height: 100px;
    font-size: 20px;
    font-weight: 500;
    padding: 10px;
    box-sizing: border-box;
}
.form-control{
    height: 30px;
    width: 100%;
}
* {
    box-sizing: inherit;
}
.btn-success::after{
    content: "";
    poisition: absolute;
    display: block;
    height: 90px;
    width: 1px;
    top: calc(100% + 300px);
}
option{
    height: 30px;
}
