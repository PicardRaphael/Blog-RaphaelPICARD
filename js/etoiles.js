var no = 40;
var delai = 10;
var dx = new Array(),
  xp = new Array(),
  yp = new Array();
var am = new Array(),
  stx = new Array(),
  sty = new Array();
var i;
var larg_fenetre = (document.body.offsetWidth < window.innerWidth)
  ? window.innerWidth
  : document.body.offsetWidth;
var haut_fenetre = (document.body.offsetHeight < window.innerHeight)
  ? window.innerHeight
  : document.body.offsetHeight;

for (i = 0; i < no; i++) {
  dx[i] = 0;
  xp[i] = Math.random() * (larg_fenetre - 40);
  yp[i] = Math.random() * haut_fenetre;
  am[i] = Math.random() * 20;
  stx[i] = 0.02 + Math.random() / 10;
  sty[i] = 0.7 + Math.random();

  var obj = document.getElementsByTagName('body')[0];
  var para = document.createElement('img');
  para.setAttribute('src', 'images/e.png');
  para.setAttribute('id', 'dot' + i);
  para.style.position = 'absolute';
  para.style.zIndex = '2';
  obj.appendChild(para);
}

function neige() {
  for (i = 0; i < no; i++) {
    dx[i] += stx[i];
    yp[i] += sty[i];
    if (yp[i] > haut_fenetre - 50) {
      xp[i] = Math.random() * (larg_fenetre - am[i] - 40);
      yp[i] = 0;
    }
    document.getElementById('dot' + i).style.top = yp[i] + 'px';
    document.getElementById('dot' + i).style.left = xp[i] + am[i] * Math.sin(dx[i]) + 'px';
  }
  setTimeout('neige()', delai);
}

neige();
