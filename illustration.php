    <doctype html>
    <html(lang="es", dir="ltr")>
    <head>
        <meta(name="viewport", content="width=device-width, user-scalable=no, initial-scale=1.0")>
        <meta(charset="utf-8")>
        <link(rel="stylesheet", type="text/css", href="main.css")>
    </head>    
    <body>
    <style>
        *,
*::after,
*::before {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-tap-highlight-color: transparent; }

/* Generic */
body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  height: 100vh;
  background-color: #FCF2E6; }

.main {
  position: relative;
  width: 55vw;
  height: 41vw; }

/*-------------*/
.nube {
  position: absolute;
  top: 0;
  left: 5vw;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 4vw;
  height: 1vw;
  -webkit-animation: nube ease 8s infinite alternate;
  animation: nube ease 8s infinite alternate; }
  .nube:nth-of-type(2) {
    left: 40vw;
    top: 5vw;
    animation: nube ease 12s infinite reverse alternate; }
  .nube-1, .nube-2 {
    position: relative;
    border-radius: 50%;
    margin-left: -.5vw;
    border-top: 1.5vw solid white;
    border-left: 1.5vw solid white;
    border-bottom: 1.5vw solid transparent;
    border-right: 1.5vw solid transparent;
    -webkit-transform: rotateZ(45deg);
    -ms-transform: rotate(45deg);
    transform: rotateZ(45deg); }
  .nube-2 {
    margin-top: .25vw;
    border-top: 1.25vw solid white;
    border-left: 1.25vw solid white;
    border-bottom: 1.25vw solid transparent;
    border-right: 1.25vw solid transparent; }

.pajaro {
  position: absolute;
  width: 3vw;
  height: 4vw;
  top: 6vw;
  left: 11vw;
  z-index: 1;
  -webkit-animation: pajaro 4s infinite;
  animation: pajaro 4s infinite; }
  .pajaro-i {
    position: absolute;
    width: 0.15vw;
    -webkit-transform-origin: bottom left;
    -ms-transform-origin: bottom left;
    transform-origin: bottom left; }
  .pajaro-1 {
    bottom: -.5vw;
    left: 1.5vw;
    width: 3vw;
    height: 3vw;
    border-radius: 50%;
    border-bottom: 1.5vw solid #4546c8;
    border-left: 1.5vw solid #4546c8;
    border-right: 1.5vw solid transparent;
    border-top: 1.5vw solid transparent;
    -webkit-transform: rotateZ(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotateZ(-45deg); }
  .pajaro-2 {
    bottom: 1.5vw;
    right: 0;
    width: 1.8vw;
    height: 1.5vw;
    border-top-left-radius: 1vw;
    border-top-right-radius: 1vw;
    background-color: #4546c8; }
    .pajaro-2::before {
      content: '';
      position: absolute;
      right: 20%;
      top: 30%;
      width: .6vw;
      height: .6vw;
      background-color: #FEFEFC;
      border-radius: 50%; }
    .pajaro-2::after {
      content: '';
      position: absolute;
      right: 25%;
      top: 50%;
      width: .2vw;
      height: .2vw;
      background-color: #2C0870;
      border-radius: 50%; }
  .pajaro-3 {
    top: 1.5vw;
    left: 2.8vw;
    z-index: -1;
    border-bottom: .4vw solid transparent;
    border-left: 0.7vw solid #FEBD6A;
    border-right: 1vw solid transparent;
    border-top: .4vw solid transparent; }

.suelo {
  position: absolute;
  bottom: 2.7vw;
  left: 50%;
  width: 46.25vw;
  height: 0.15vw;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  border-radius: 50%;
  background-image: -webkit-gradient(linear, left top, right top, from(#238396), color-stop(#178ba4), to(#238396));
  background-image: -webkit-linear-gradient(left, #238396, #178ba4, #238396);
  background-image: -o-linear-gradient(left, #238396, #178ba4, #238396);
  background-image: linear-gradient(left, #238396, #178ba4, #238396); }

.bote {
  position: absolute;
  bottom: 0;
  left: 17.8vw;
  width: 4vw;
  height: 4.5vw;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.5vw, #6AA5CA), color-stop(0.5vw, #398CB4), color-stop(0.6vw, #398CB4), color-stop(0.6vw, #6AA5CA), color-stop(6vw, #398CB4));
  background-image: -webkit-linear-gradient(top, #6AA5CA 0.5vw, #398CB4 0.5vw, #398CB4 0.6vw, #6AA5CA 0.6vw, #398CB4 6vw);
  background-image: -o-linear-gradient(top, #6AA5CA 0.5vw, #398CB4 0.5vw, #398CB4 0.6vw, #6AA5CA 0.6vw, #398CB4 6vw);
  background-image: linear-gradient(top, #6AA5CA 0.5vw, #398CB4 0.5vw, #398CB4 0.6vw, #6AA5CA 0.6vw, #398CB4 6vw); }
  .bote:nth-of-type(2) {
    bottom: -.1vw;
    left: 40vw;
    -webkit-transform: rotateZ(-90deg);
    -ms-transform: rotate(-90deg);
    transform: rotateZ(-90deg); }
    .bote:nth-of-type(2)::before {
      content: '';
      position: absolute;
      left: -2vw;
      top: -2vw;
      height: .2vw;
      width: 4vw;
      background: #f09b1f;
      border: none;
      -webkit-transform: rotateZ(90deg);
      -ms-transform: rotate(90deg);
      transform: rotateZ(90deg); }
  .bote::before {
    content: '';
    position: absolute;
    top: -1vw;
    right: -.1vw;
    width: 4vw;
    height: 3vw;
    border-top: 0.1vw solid transparent;
    border-left: 0.1vw solid transparent;
    border-bottom: 0.1vw solid #FEFEFC;
    border-right: 0.1vw solid #FEFEFC;
    border-radius: 50%;
    -webkit-transform: rotateZ(30deg);
    -ms-transform: rotate(30deg);
    transform: rotateZ(30deg); }

.colores-i {
  position: absolute;
  width: 0.15vw;
  -webkit-transform-origin: bottom right;
  -ms-transform-origin: bottom right;
  transform-origin: bottom right; }

.colores-1 {
  height: 1.3vw;
  top: -1.3vw;
  left: 0.7vw;
  -webkit-transform: rotateZ(-20deg);
  -ms-transform: rotate(-20deg);
  transform: rotateZ(-20deg);
  background-color: #116577; }

.colores-2 {
  height: 1.8vw;
  top: -1.8vw;
  left: 1.4vw;
  -webkit-transform: rotateZ(-5deg);
  -ms-transform: rotate(-5deg);
  transform: rotateZ(-5deg);
  background-color: #FEBD6A; }

.colores-3 {
  height: 2vw;
  top: -2vw;
  left: 2.7vw;
  -webkit-transform: rotateZ(10deg);
  -ms-transform: rotate(10deg);
  transform: rotateZ(10deg);
  background-color: #002E83; }

.colores-4 {
  height: 1.5vw;
  top: -1.4vw;
  left: 3vw;
  -webkit-transform: rotateZ(35deg);
  -ms-transform: rotate(35deg);
  transform: rotateZ(35deg);
  background-color: #238396; }

.colores-5 {
  height: 2.2vw;
  top: -2.15vw;
  left: 3.5vw;
  -webkit-transform: rotateZ(25deg);
  -ms-transform: rotate(25deg);
  transform: rotateZ(25deg);
  background-color: #238396; }

.humano {
  position: absolute;
  top: 3vw;
  left: 5.5vw;
  width: 25vw;
  height: 35vw;
  z-index: 100; }
  .humano-i {
    position: absolute; }
  .humano-pi {
    width: 4.5vw;
    height: 15vw;
    bottom: 4vw;
    left: 9vw;
    -webkit-transform-origin: bottom left;
    -ms-transform-origin: bottom left;
    transform-origin: bottom left;
    -webkit-transform: rotateZ(40deg);
    -ms-transform: rotate(40deg);
    transform: rotateZ(40deg);
    border-top-right-radius: 2vw;
    background-image: -webkit-linear-gradient(170deg, transparent 2vw, #020750 2vw, #002E83 2.75vw);
    background-image: -o-linear-gradient(170deg, transparent 2vw, #020750 2vw, #002E83 2.75vw);
    background-image: linear-gradient(-80deg, transparent 2vw, #020750 2vw, #002E83 2.75vw); }
    .humano-pi::before {
      content: '';
      position: absolute;
      bottom: 0;
      border-top: 1.5vw solid transparent;
      border-bottom: 1.5vw solid transparent;
      border-left: 6vw solid #020750;
      border-right: 1vw solid transparent;
      -webkit-transform-origin: bottom left;
      -ms-transform-origin: bottom left;
      transform-origin: bottom left;
      -webkit-transform: rotateZ(30deg) skewX(30deg);
      -ms-transform: rotate(30deg) skewX(30deg);
      transform: rotateZ(30deg) skewX(30deg); }
    .humano-pi::after {
      content: '';
      position: absolute;
      bottom: 1vw;
      width: 3vw;
      height: 3vw;
      background-image: -webkit-linear-gradient(170deg, transparent 0.4vw, #2C0870 0.5vw, #020750 1.5vw);
      background-image: -o-linear-gradient(170deg, transparent 0.4vw, #2C0870 0.5vw, #020750 1.5vw);
      background-image: linear-gradient(-80deg, transparent 0.4vw, #2C0870 0.5vw, #020750 1.5vw); }
  .humano-pd {
    width: 4.5vw;
    height: 15vw;
    top: 10.9vw;
    left: 12.5vw;
    -webkit-transform-origin: bottom left;
    -ms-transform-origin: bottom left;
    transform-origin: bottom left;
    -webkit-transform: rotateZ(-63deg);
    -ms-transform: rotate(-63deg);
    transform: rotateZ(-63deg);
    border-top-left-radius: 3vw;
    border-top-right-radius: 2vw;
    background-image: -webkit-linear-gradient(10deg, transparent 2vw, #2C0870 2vw, #024799 2.75vw);
    background-image: -o-linear-gradient(10deg, transparent 2vw, #2C0870 2vw, #024799 2.75vw);
    background-image: linear-gradient(80deg, transparent 2vw, #2C0870 2vw, #024799 2.75vw); }
    .humano-pd::before {
      content: '';
      position: absolute;
      bottom: 0;
      right: 0;
      border-top: 1.5vw solid transparent;
      border-bottom: 1.5vw solid transparent;
      border-left: 1vw solid transparent;
      border-right: 6vw solid #020750;
      -webkit-transform-origin: bottom right;
      -ms-transform-origin: bottom right;
      transform-origin: bottom right;
      -webkit-transform: rotateZ(-30deg) skewX(-30deg);
      -ms-transform: rotate(-30deg) skewX(-30deg);
      transform: rotateZ(-30deg) skewX(-30deg); }
    .humano-pd::after {
      content: '';
      position: absolute;
      right: 0;
      bottom: 1vw;
      width: 3vw;
      height: 3vw;
      background-image: -webkit-linear-gradient(10deg, transparent 0.4vw, #2C0870 0.5vw, #020750 1.5vw);
      background-image: -o-linear-gradient(10deg, transparent 0.4vw, #2C0870 0.5vw, #020750 1.5vw);
      background-image: linear-gradient(80deg, transparent 0.4vw, #2C0870 0.5vw, #020750 1.5vw); }
  .humano-pdt {
    bottom: 15.5vw;
    width: 10vw;
    height: 5vw;
    border-top-left-radius: 3vw;
    border-bottom-left-radius: 2vw;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#020750), to(#024799));
    background-image: -webkit-linear-gradient(top, #020750, #024799);
    background-image: -o-linear-gradient(top, #020750, #024799);
    background-image: linear-gradient(top, #020750, #024799); }
    .humano-pdt::before {
      content: '';
      position: absolute;
      bottom: 2.1vw;
      right: -.4vw;
      width: 5vw;
      height: 0.125vw;
      background-color: #00256a;
      -webkit-transform-origin: top left;
      -ms-transform-origin: top left;
      transform-origin: top left;
      -webkit-transform: rotateZ(25deg);
      -ms-transform: rotate(25deg);
      transform: rotateZ(25deg); }
    .humano-pdt::after {
      content: '';
      position: absolute;
      bottom: 0;
      right: 0;
      width: 3vw;
      height: 6vw;
      background-image: -webkit-linear-gradient(50deg, transparent 1.9vw, #f09b1f 1.9vw);
      background-image: -o-linear-gradient(50deg, transparent 1.9vw, #f09b1f 1.9vw);
      background-image: linear-gradient(40deg, transparent 1.9vw, #f09b1f 1.9vw);
      border-top-left-radius: 1.4vw; }
  .humano-mandila {
    top: 10.5vw;
    right: 13.5vw;
    width: 7vw;
    height: 13vw;
    -webkit-transform-origin: top right;
    -ms-transform-origin: top right;
    transform-origin: top right;
    -webkit-transform: rotateZ(-40deg);
    -ms-transform: rotate(-40deg);
    transform: rotateZ(-40deg);
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(70%, #f09b1f), to(#FEBD6A));
    background-image: -webkit-linear-gradient(top, #f09b1f 70%, #FEBD6A);
    background-image: -o-linear-gradient(top, #f09b1f 70%, #FEBD6A);
    background-image: linear-gradient(top, #f09b1f 70%, #FEBD6A);
    z-index: -2; }
  .humano-cuerpo {
    top: 4vw;
    left: 8vw;
    width: 11vw;
    height: 15vw;
    z-index: -3;
    border-top-left-radius: 7.4vw;
    background-image: -webkit-linear-gradient(170deg, transparent 1.9vw, #d10955 1.9vw, #FF006B);
    background-image: -o-linear-gradient(170deg, transparent 1.9vw, #d10955 1.9vw, #FF006B);
    background-image: linear-gradient(-80deg, transparent 1.9vw, #d10955 1.9vw, #FF006B);
    -webkit-transform-origin: bottom left;
    -ms-transform-origin: bottom left;
    transform-origin: bottom left;
    -webkit-transform: rotateZ(5deg);
    -ms-transform: rotate(5deg);
    transform: rotateZ(5deg);
    overflow: hidden;
    -webkit-box-shadow: inset 0.75vw 0.75vw 1vw #d10955;
    box-shadow: inset 0.75vw 0.75vw 1vw #d10955; }
    .humano-cuerpoa {
      position: absolute;
      top: -1.5vw;
      width: 3.75vw;
      height: 4vw;
      left: 6.8vw;
      border-radius: 50%;
      border: 0.25vw solid #FEFEFC;
      -webkit-box-shadow: inset 0.25vw -0.25vw 0.125vw #FF96AF;
      box-shadow: inset 0.25vw -0.25vw 0.125vw #FF96AF;
      background-color: #FFAEC0; }
  .humano-bd {
    top: 7vw;
    left: 10.7vw;
    width: 4.5vw;
    height: 9vw;
    -webkit-transform: top right;
    -ms-transform: top right;
    transform: top right;
    -webkit-transform: rotate(-25deg);
    -ms-transform: rotate(-25deg);
    transform: rotate(-25deg);
    border-top-left-radius: 4vw;
    border-top-right-radius: 4vw;
    background-image: -webkit-linear-gradient(115deg, transparent 1.9vw, #FF006B 1.9vw, #d10955);
    background-image: -o-linear-gradient(115deg, transparent 1.9vw, #FF006B 1.9vw, #d10955);
    background-image: linear-gradient(-25deg, transparent 1.9vw, #FF006B 1.9vw, #d10955);
    -webkit-animation: bd 1.75s ease infinite alternate;
    animation: bd 1.75s ease infinite alternate; }
    .humano-bd::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      -webkit-transform: translate(-50%) rotateZ(-24deg) skewX(-10deg);
      -ms-transform: translate(-50%) rotate(-24deg) skewX(-10deg);
      transform: translate(-50%) rotateZ(-24deg) skewX(-10deg);
      width: 130%;
      height: 1.25vw;
      background-image: -webkit-gradient(linear, left top, right top, from(#FEBD6A), color-stop(20%, #FEFEFC));
      background-image: -webkit-linear-gradient(left, #FEBD6A, #FEFEFC 20%);
      background-image: -o-linear-gradient(left, #FEBD6A, #FEFEFC 20%);
      background-image: linear-gradient(left, #FEBD6A, #FEFEFC 20%); }
    .humano-bd::after {
      content: '';
      position: absolute;
      top: 30%;
      right: 0;
      width: 0.125vw;
      height: 45%;
      background-color: #b9084b; }
  .humano-ad {
    left: 13vw;
    top: 14vw;
    width: 10vw;
    height: 3vw;
    border-top: 0.125vw solid #ffc8d4;
    background-image: -webkit-linear-gradient(100deg, transparent 1.5vw, #FFAEC0 1.5vw);
    background-image: -o-linear-gradient(100deg, transparent 1.5vw, #FFAEC0 1.5vw);
    background-image: linear-gradient(-10deg, transparent 1.5vw, #FFAEC0 1.5vw);
    z-index: -1;
    -webkit-animation: ad 1.75s ease infinite alternate;
    animation: ad 1.75s ease infinite alternate; }
    .humano-ad::before {
      content: '';
      position: absolute;
      width: 4vw;
      height: 3vw;
      background-image: -webkit-gradient(linear, left top, right top, from(#ff7d9c), to(#FFAEC0));
      background-image: -webkit-linear-gradient(left, #ff7d9c, #FFAEC0);
      background-image: -o-linear-gradient(left, #ff7d9c, #FFAEC0);
      background-image: linear-gradient(left, #ff7d9c, #FFAEC0);
      border-bottom-right-radius: 3vw; }
  .humano-md {
    top: -2.2vw;
    right: -.8vw;
    height: 3.5vw;
    width: 1vw;
    -webkit-transform: rotateZ(10deg);
    -ms-transform: rotate(10deg);
    transform: rotateZ(10deg);
    background-image: -webkit-gradient(linear, left top, right top, color-stop(1vw, #FFAEC0), to(#ff7d9c));
    background-image: -webkit-linear-gradient(left, #FFAEC0 1vw, #ff7d9c);
    background-image: -o-linear-gradient(left, #FFAEC0 1vw, #ff7d9c);
    background-image: linear-gradient(left, #FFAEC0 1vw, #ff7d9c);
    border-top-left-radius: 1vw; }
    .humano-md::before {
      content: '';
      position: absolute;
      left: -1.6vw;
      top: -.4vw;
      height: 3vw;
      width: 0.25vw;
      background-color: #020750;
      -webkit-transform: rotateZ(90deg);
      -ms-transform: rotate(90deg);
      transform: rotateZ(90deg); }
  .humano-mandilb {
    top: 10vw;
    left: 11.5vw;
    width: 7vw;
    height: 7.7vw;
    -webkit-transform: rotateZ(15deg);
    -ms-transform: rotate(15deg);
    transform: rotateZ(15deg);
    background-color: #f09b1f;
    z-index: -2; }
    .humano-mandilb::after, .humano-mandilb::before {
      content: '';
      position: absolute;
      top: -6vw;
      right: 0;
      width: 0.85vw;
      height: 6.5vw;
      background-color: #f09b1f; }
    .humano-mandilb::after {
      left: 1vw;
      top: -4.8vw;
      -webkit-transform: rotateZ(-20deg);
      -ms-transform: rotate(-20deg);
      transform: rotateZ(-20deg);
      border-top-left-radius: 0.5vw;
      -webkit-box-shadow: -0.15vw 1vw 1vw #d10955;
      box-shadow: -0.15vw 1vw 1vw #d10955; }
  .humano-bi {
    top: 5.3vw;
    right: 3vw;
    width: 3vw;
    height: 7.5vw;
    -webkit-transform: rotateZ(15deg);
    -ms-transform: rotate(15deg);
    transform: rotateZ(15deg);
    background-image: -webkit-gradient(linear, left top, right top, from(#a00741), color-stop(80%, #d10955));
    background-image: -webkit-linear-gradient(left, #a00741, #d10955 80%);
    background-image: -o-linear-gradient(left, #a00741, #d10955 80%);
    background-image: linear-gradient(left, #a00741, #d10955 80%);
    border-top-right-radius: 2vw;
    z-index: -4; }
    .humano-bi::before {
      content: '';
      position: absolute;
      bottom: -.2vw;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
      width: 120%;
      height: 1vw;
      background-image: -webkit-gradient(linear, left top, right top, from(#FEBD6A), color-stop(80%, #FEFEFC));
      background-image: -webkit-linear-gradient(left, #FEBD6A, #FEFEFC 80%);
      background-image: -o-linear-gradient(left, #FEBD6A, #FEFEFC 80%);
      background-image: linear-gradient(left, #FEBD6A, #FEFEFC 80%); }
  .humano-mi {
    top: 12.5vw;
    right: 5vw;
    width: 2vw;
    height: 7vw;
    -webkit-transform: rotateZ(15deg);
    -ms-transform: rotate(15deg);
    transform: rotateZ(15deg);
    background-image: -webkit-linear-gradient(172deg, transparent 1vw, #FF96AF 1vw, #ff7d9c);
    background-image: -o-linear-gradient(172deg, transparent 1vw, #FF96AF 1vw, #ff7d9c);
    background-image: linear-gradient(-82deg, transparent 1vw, #FF96AF 1vw, #ff7d9c);
    z-index: -3; }
    .humano-mi::before {
      content: '';
      position: absolute;
      bottom: -.5vw;
      width: 3vw;
      height: 1vw;
      border-top-left-radius: 2vw;
      border-top-right-radius: 4vw;
      background-image: -webkit-gradient(linear, left top, right top, from(#ff7d9c), to(#FF96AF));
      background-image: -webkit-linear-gradient(left, #ff7d9c, #FF96AF);
      background-image: -o-linear-gradient(left, #ff7d9c, #FF96AF);
      background-image: linear-gradient(left, #ff7d9c, #FF96AF); }
  .humano-head {
    top: 0.25vw;
    left: 16vw;
    width: 7vw;
    height: 7vw;
    -webkit-animation: head 2s ease infinite alternate;
    animation: head 2s ease infinite alternate; }
    .humano-head1 {
      bottom: 0;
      left: 1vw;
      width: 4vw;
      height: 2.5vw;
      -webkit-transform-origin: bottom left;
      -ms-transform-origin: bottom left;
      transform-origin: bottom left;
      -webkit-transform: rotateZ(-10deg);
      -ms-transform: rotate(-10deg);
      transform: rotateZ(-10deg);
      border-bottom-left-radius: 2vw;
      border-bottom-right-radius: 3vw;
      background-color: #FFAEC0; }
    .humano-head2 {
      bottom: 0.5vw;
      left: 2vw;
      width: 3.5vw;
      height: 2.5vw;
      -webkit-transform-origin: bottom left;
      -ms-transform-origin: bottom left;
      transform-origin: bottom left;
      border-bottom-right-radius: 3vw;
      background-color: #FFAEC0; }
    .humano-head3 {
      bottom: 0.5vw;
      left: 3.5vw;
      width: 2vw;
      height: 5vw;
      -webkit-transform-origin: bottom left;
      -ms-transform-origin: bottom left;
      transform-origin: bottom left;
      -webkit-transform: rotateZ(5deg);
      -ms-transform: rotate(5deg);
      transform: rotateZ(5deg);
      border-top-right-radius: 1vw;
      border-bottom-right-radius: 90%;
      background-color: #FFAEC0; }
    .humano-head4 {
      top: 1.25vw;
      left: 2vw;
      width: 2.5vw;
      height: 3vw;
      border-top-left-radius: 2vw;
      border-bottom-right-radius: 2vw;
      -webkit-transform-origin: bottom left;
      -ms-transform-origin: bottom left;
      transform-origin: bottom left;
      -webkit-transform: rotateZ(5deg);
      -ms-transform: rotate(5deg);
      transform: rotateZ(5deg);
      background-color: #2C0870; }
      .humano-head4::after, .humano-head4::before {
        content: '';
        position: absolute;
        top: 1.2vw;
        left: -1vw;
        width: 2vw;
        height: 2vw;
        border-radius: 50%;
        background-color: #2C0870; }
      .humano-head4::after {
        top: 2.1vw;
        left: -1.25vw;
        width: 2.5vw;
        height: 1.75vw;
        border-radius: 50%; }
    .humano-head5 {
      top: 0.9vw;
      left: 2.2vw;
      width: 3.7vw;
      height: 1.5vw;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#c70951), to(#d10955));
      background-image: -webkit-linear-gradient(top, #c70951, #d10955);
      background-image: -o-linear-gradient(top, #c70951, #d10955);
      background-image: linear-gradient(top, #c70951, #d10955);
      border-top-left-radius: 3vw;
      border-top-right-radius: 3vw; }
      .humano-head5::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 120%;
        height: 0.125vw;
        background-color: #d10955; }
      .humano-head5::after {
        content: '';
        position: absolute;
        top: -.25vw;
        left: 50%;
        width: 0.3vw;
        height: 0.3vw;
        background-color: #d10955;
        border-top-left-radius: 50%;
        border-top-right-radius: 50%; }
    .humano-head6 {
      top: 2.9vw;
      left: 3.1vw;
      width: 1.25vw;
      height: 1.5vw;
      background-color: #FFAEC0;
      border-radius: 50%;
      -webkit-transform: rotateZ(20deg);
      -ms-transform: rotate(20deg);
      transform: rotateZ(20deg); }
      .humano-head6::before {
        content: '';
        position: absolute;
        bottom: 20%;
        left: 10%;
        width: 0.8vw;
        height: 1vw;
        border-radius: 50%;
        background-color: rgba(255, 150, 175, 0.25); }
    .humano-head7 {
      top: 4vw;
      right: 0.5vw;
      border-top: 0.4vw solid transparent;
      border-bottom: 0.3vw solid transparent;
      border-left: 0.8vw solid #FFAEC0;
      border-right: 0.4vw solid transparent;
      -webkit-transform: rotateZ(18deg) skewX(15deg);
      -ms-transform: rotate(18deg) skewX(15deg);
      transform: rotateZ(18deg) skewX(15deg); }
    .humano-head8 {
      top: 4.4vw;
      left: 4vw;
      width: 0.75vw;
      height: 1vw;
      border-radius: 50%;
      background-color: rgba(255, 150, 175, 0.7);
      -webkit-transform: rotateZ(18deg);
      -ms-transform: rotate(18deg);
      transform: rotateZ(18deg); }

.lienzo {
  position: absolute;
  top: 3.2vw;
  right: 15vw;
  width: 13vw;
  height: 35vw;
  z-index: 1000; }
  .lienzo-i {
    position: absolute;
    border-radius: 1vw; }
  .lienzo-1 {
    left: 1vw;
    top: 0.25vw;
    width: 0.9vw;
    height: 20.5vw;
    z-index: 200;
    -webkit-transform-origin: bottom left;
    -ms-transform-origin: bottom left;
    transform-origin: bottom left;
    -webkit-transform: rotateZ(15deg);
    -ms-transform: rotate(15deg);
    transform: rotateZ(15deg);
    background-image: -webkit-gradient(linear, left top, right top, from(#116577), to(#238396));
    background-image: -webkit-linear-gradient(left, #116577, #238396);
    background-image: -o-linear-gradient(left, #116577, #238396);
    background-image: linear-gradient(left, #116577, #238396); }
    .lienzo-1::before {
      content: '';
      position: absolute;
      bottom: 0;
      right: 0.9vw;
      width: 0.9vw;
      height: 19vw;
      border-radius: 1vw;
      background-color: #FEFEFC; }
  .lienzo-2 {
    left: 3.9vw;
    bottom: 0;
    width: 0.9vw;
    height: 25.5vw;
    -webkit-transform-origin: bottom left;
    -ms-transform-origin: bottom left;
    transform-origin: bottom left;
    border-radius: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(3vw, #116577), color-stop(10vw, #238396));
    background-image: -webkit-linear-gradient(top, #116577 3vw, #238396 10vw);
    background-image: -o-linear-gradient(top, #116577 3vw, #238396 10vw);
    background-image: linear-gradient(top, #116577 3vw, #238396 10vw); }
  .lienzo-3 {
    right: 0;
    bottom: 0;
    width: 0.9vw;
    height: 29vw;
    -webkit-transform-origin: bottom right;
    -ms-transform-origin: bottom right;
    transform-origin: bottom right;
    -webkit-transform: rotateZ(-15deg);
    -ms-transform: rotate(-15deg);
    transform: rotateZ(-15deg);
    border-radius: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(3vw, #116577), color-stop(10vw, #238396));
    background-image: -webkit-linear-gradient(top, #116577 3vw, #238396 10vw);
    background-image: -o-linear-gradient(top, #116577 3vw, #238396 10vw);
    background-image: linear-gradient(top, #116577 3vw, #238396 10vw); }
  .lienzo-4 {
    right: 3.1vw;
    bottom: 12vw;
    width: 0.9vw;
    height: 6.25vw;
    -webkit-transform-origin: bottom right;
    -ms-transform-origin: bottom right;
    transform-origin: bottom right;
    -webkit-transform: rotateZ(-60deg);
    -ms-transform: rotate(-60deg);
    transform: rotateZ(-60deg);
    background-color: #238396; }

.silla {
  position: absolute;
  bottom: 2.8vw;
  left: 10vw;
  width: 11vw;
  height: 29vw; }
  .silla-i {
    position: absolute; }
  .silla-1, .silla-2, .silla-3, .silla-4 {
    bottom: 0;
    width: 0.5vw;
    height: 13.5vw;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(3vw, #116577), color-stop(10vw, #238396));
    background-image: -webkit-linear-gradient(top, #116577 3vw, #238396 10vw);
    background-image: -o-linear-gradient(top, #116577 3vw, #238396 10vw);
    background-image: linear-gradient(top, #116577 3vw, #238396 10vw); }
  .silla-2 {
    right: 0; }
  .silla-3, .silla-4 {
    z-index: -2;
    background: #88d4e3; }
  .silla-3 {
    left: 1.75vw; }
  .silla-4 {
    right: 2vw; }
  .silla-6 {
    width: 100%;
    height: 2.75vw;
    bottom: 4.5vw;
    z-index: -1;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(3vw, #14788d), color-stop(10vw, #4abed5));
    background-image: -webkit-linear-gradient(top, #14788d 3vw, #4abed5 10vw);
    background-image: -o-linear-gradient(top, #14788d 3vw, #4abed5 10vw);
    background-image: linear-gradient(top, #14788d 3vw, #4abed5 10vw); }
  .silla-7 {
    width: 63%;
    height: 2vw;
    bottom: 8vw;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    background: #88d4e3; }
  .silla-8 {
    width: 125%;
    height: 0.75vw;
    bottom: 13.5vw;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    background-image: -webkit-gradient(linear, left top, right top, from(#116577), color-stop(40%, #2ba0b7), color-stop(60%, #2ba0b7), to(#116577));
    background-image: -webkit-linear-gradient(left, #116577, #2ba0b7 40%, #2ba0b7 60%, #116577);
    background-image: -o-linear-gradient(left, #116577, #2ba0b7 40%, #2ba0b7 60%, #116577);
    background-image: linear-gradient(left, #116577, #2ba0b7 40%, #2ba0b7 60%, #116577); }
  .silla-9 {
    width: 125%;
    height: 2vw;
    bottom: 14.2vw;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    background-image: -webkit-linear-gradient(135deg, #238396 9.7vw, transparent 9.7vw);
    background-image: -o-linear-gradient(135deg, #238396 9.7vw, transparent 9.7vw);
    background-image: linear-gradient(-45deg, #238396 9.7vw, transparent 9.7vw); }
  .silla-10 {
    top: 0.5vw;
    width: 100%;
    height: 13vw;
    border-top-left-radius: 1vw;
    border-top-right-radius: 1vw;
    background-color: #4abed5; }
    .silla-10::after, .silla-10::before {
      content: '';
      position: absolute;
      top: 2vw;
      width: 0.25vw;
      height: 50%;
      border-radius: 1vw;
      background-color: #FCF2E6; }
    .silla-10::before {
      left: 2vw; }
    .silla-10::after {
      left: 4vw; }

@-webkit-keyframes head {
  0%, 10%, 60% {
    -webkit-transform: rotateZ(-2deg);
    transform: rotateZ(-2deg); }
  20%, 80%, 100% {
    -webkit-transform: rotateZ(2deg);
    transform: rotateZ(2deg); } }

@keyframes head {
  0%, 10%, 60% {
    -webkit-transform: rotateZ(-2deg);
    transform: rotateZ(-2deg); }
  20%, 80%, 100% {
    -webkit-transform: rotateZ(2deg);
    transform: rotateZ(2deg); } }

@-webkit-keyframes bd {
  0%, 10%, 50% {
    -webkit-transform: rotate(-25deg) translateY(-0.1vw);
    transform: rotate(-25deg) translateY(-0.1vw); }
  20%, 60%, 70%, 90%, 100% {
    -webkit-transform: rotate(-25deg) translateY(0.1vw);
    transform: rotate(-25deg) translateY(0.1vw); } }

@keyframes bd {
  0%, 10%, 50% {
    -webkit-transform: rotate(-25deg) translateY(-0.1vw);
    transform: rotate(-25deg) translateY(-0.1vw); }
  20%, 60%, 70%, 90%, 100% {
    -webkit-transform: rotate(-25deg) translateY(0.1vw);
    transform: rotate(-25deg) translateY(0.1vw); } }

@-webkit-keyframes ad {
  0%, 10%, 50% {
    -webkit-transform: translateY(-0.1vw);
    transform: translateY(-0.1vw);
    -webkit-transform-origin: bottom left;
    transform-origin: bottom left; }
  20%, 60%, 70%, 90%, 100% {
    -webkit-transform: translateY(0.1vw);
    transform: translateY(0.1vw);
    -webkit-transform-origin: bottom left;
    transform-origin: bottom left; } }

@keyframes ad {
  0%, 10%, 50% {
    -webkit-transform: translateY(-0.1vw);
    transform: translateY(-0.1vw);
    -webkit-transform-origin: bottom left;
    transform-origin: bottom left; }
  20%, 60%, 70%, 90%, 100% {
    -webkit-transform: translateY(0.1vw);
    transform: translateY(0.1vw);
    -webkit-transform-origin: bottom left;
    transform-origin: bottom left; } }

@-webkit-keyframes pajaro {
  0%, 90%, 96%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  94% {
    -webkit-transform: translateY(-1vw);
    transform: translateY(-1vw); } }

@keyframes pajaro {
  0%, 90%, 96%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  94% {
    -webkit-transform: translateY(-1vw);
    transform: translateY(-1vw); } }

@-webkit-keyframes nube {
  0% {
    -webkit-transform: translateX(-2vw);
    transform: translateX(-2vw); }
  100% {
    -webkit-transform: translateX(2vw);
    transform: translateX(2vw); } }

@keyframes nube {
  0% {
    -webkit-transform: translateX(-2vw);
    transform: translateX(-2vw); }
  100% {
    -webkit-transform: translateX(2vw);
    transform: translateX(2vw); } }

    </style>
        <div class="header ">
            <div>
                <a href="">salut</a>
                <a href="">le titre</a>
                <a href="">about</a>
            </div>
        </div>
        <div class="main">
            <div class="nubes">
                <div class="nube">
                    <div class="nube-1"></div>
                    <div class="nube-2"></div>
                </div>    
                <div class="nube">
                    <div class="nube-1"></div>
                    <div class="nube-2"></div>
                </div>    
            </div>
            <div class="pajaro">
                <div class="pajaro-1 pajaro-i"></div>
                <div class="pajaro-2 pajaro-i"></div>
                <div class="pajaro-3 pajaro-i"></div>
            </div>    
            <div class="suelo">
                <div class="bote">
                    <div class="colores-1 colores-i"></div>
                    <div class="colores-2 colores-i"></div>
                    <div class="colores-3 colores-i"></div>
                    <div class="colores-4 colores-i"></div>
                    <div class="colores-5 colores-i"></div>
                </div>    
                <div class="bote"></div> 
            </div>
            <div class="humano"></div>
                <div class="humano-pi humano-i"></div>
                <div class="humano-pd humano-i"></div>
                <div class="humano-pdt humano-i"></div>
                <div class="humano-mandila humano-i"></div>
                <div class="humano-cuerpo humano-i">
                    <div class="humano-cuerpoa humano-i"></div>
                </div>    
                <div class="humano-bd humano-i"></div>
                <div class="humano-ad humano-i">
                    <div class="humano-md humano-i"></div>
                </div>    
                <div class="humano-mandilb humano-i"></div>
                <div class="humano-bi humano-i"></div>
                <div class="humano-mi humano-i"></div>
                <div class="humano-head humano-i">
                    <div class="humano-head1 humano-i"></div>
                    <div class="humano-head2 humano-i"></div>
                    <div class="humano-head3 humano-i"></div>
                    <div class="humano-head4 humano-i"></div>
                    <div class="humano-head5 humano-i"></div>
                    <div class="humano-head6 humano-i"></div>
                    <div class="humano-head7 humano-i"></div>
                    <div class="humano-head8 humano-i"></div>
                    <div class="humano-head9 humano-i"></div>
                    <div class="humano-head10 humano-i"></div>
                </div>    
            <div class="lienzo">
                <div class="lienzo-1 lienzo-i"></div>
                <div class="lienzo-2 lienzo-i"></div>
                <div class="lienzo-3 lienzo-i"></div>
                <div class="lienzo-4 lienzo-i"></div>
            </div>    
            <div class="silla">
                <div class="silla-1 silla-i"></div>
                <div class="silla-2 silla-i"></div>
                <div class="silla-3 silla-i"></div>
                <div class="silla-4 silla-i"></div>
                <div class="silla-5 silla-i"></div>
                <div class="silla-6 silla-i"></div>
                <div class="silla-7 silla-i"></div>
                <div class="silla-8 silla-i"></div>
                <div class="silla-9 silla-i"></div>
                <div class="silla-10 silla-i"></div>
            </div>    
        </div>        
    </body>        
    </html>