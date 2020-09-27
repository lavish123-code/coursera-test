<style type="text/css">
html{
    scroll-behavior:smooth;
}
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Muli',sans-serif; 
}
.row{margin-left:0 !important; margin-right:0 !important;}
.nav_style {
    background-color: #a29bfe !important;
}
.nav_style a {
    color:white;
}
/*/main-header*/
.main-header {
    width:100%;
    height:450px;
}
.rightside h1 {
    font-size:3rem;
}
.rotate img {
    animation:gocorona 3s linear infinite;
}
@keyframes gocorona {
    0% {transform:rotate(0);}
    100% {transform:rotate(360deg);}
}
.leftside img {
    animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat
{
    0%
    {
        transform:scale(.75);
    }
    20%
    {
        transform:scale(1);
    }
    40%
    {
        transform:scale(.75);
    }
    60%
    {
        transform:scale(1);
    }
    80%
    {
        transform:scale(.75);
    }
    100%
    {
        transform:scale(.75);
    }
}
.corona_update {
    margin: 0 0 30px 0;
}
.corona_update h3 {
    color:#ff7675;
}
.corona_update h1 {
    font-size:2rem;
    text-align:center;
}
.sub_section {
    background-color: #c2c2c2;
}
.footer_style {
    background-color:#a29bfe;
}
.footer_style p{
    margin-bottom: 0 !important;
}
#mybtn {
    display:none;
    position:fixed;
    bottom:30px;
    right:40px;
    z-index:99;
    border:none;
    outline:none;
    background-color:#00A8FF;
    color:white;
    cursor:pointer;
    padding:10px;
    border-radius:10px;
}
#mybtn:hover{
    background:#606060;
}
@media(max-width:780px) {
    .main_header{ height:700px; text-align:center;}
    .main_header h1 {
        text-align:center;
        padding:0;
        width:100%;
        font-size:34px;
        }
        .count-style {
            display:inline!important;
        }
        .count-style p{
            text-align:center;
        }
        .image_left {
            margin-left:0 !important;
        }
}
</style>