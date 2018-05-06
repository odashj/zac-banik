
 var r;
 var canvas;


 function setup() {
 	
 	canvas = createCanvas(windowWidth, windowHeight);
 	canvas.parent('supComp');
blendMode(EXCLUSION);
 	
 	r = 0;
    x1 = 0;
    y1 = 0;
    x2 = 0;
    y2 = 0;
 }

 function draw() {
  noLoop();
  r = int(random(radians(0),radians(360)));
  x1 = int(random(0, width-(width/10)));
  y1 = int(random(0, height-(height/10)));
  x2 = int(random(0, width-(width/10)));
  y2 = int(random(0, height-(height/10)));
  x3 = int(random(0, width/2));
  y3 = int(random(0, height/2));
  x4 = int(random(width/2, width));
  y4 = int(random(height/2, height));
  s1 = int(random(width/6, width/4));
  s2 = int(random(width/6, width/4));
  

  push();
  translate(width/2, height/2);
  translate(-width/2, -height/2);
  fill(56,54,47);
  noStroke();
  ellipse(x1, y1, s1, s1);
  rect(x2, y2, s2, s2);
  stroke(56,54,47);
  strokeWeight(5);
  strokeCap(PROJECT);
  line(x3, y3, width, height);
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}