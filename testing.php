<?php
ob_start();
?>
<style>

*, *::before, *::after {
  box-sizing: border-box;
}

@-webkit-keyframes rotate {
  100% {
    transform: rotate(1turn);
  }
}

@keyframes rotate {
  100% {
    transform: rotate(1turn);
  }
}
.conic {
  position: relative;
  z-index: 0;
  width: 400px;
  height: 300px;
  margin: 20px;
  border-radius: 10px;
  overflow: hidden;
  padding: 2rem;
}
.conic::before {
  content: "";
  position: absolute;
  z-index: -2;
  left: -50%;
  top: -50%;
  width: 200%;
  height: 200%;
  background-color: #1a232a;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-image: conic-gradient(transparent, #a8efff, transparent 30%);
  -webkit-animation: rotate 4s linear infinite;
          animation: rotate 4s linear infinite;
}
.conic::after {
  content: "";
  position: absolute;
  z-index: -1;
  left: 6px;
  top: 6px;
  width: calc(100% - 12px);
  height: calc(100% - 12px);
  background: white;
  border-radius: 5px;
}

@-webkit-keyframes opacityChange {
  50% {
    opacity: 0.5;
  }
  100% {
    opacity: 1;
  }
}

@keyframes opacityChange {
  50% {
    opacity: 0.5;
  }
  100% {
    opacity: 1;
  }
}

</style>
<div class="conic"></div>
<?php
$content = ob_get_clean();
require('template.php');
?>