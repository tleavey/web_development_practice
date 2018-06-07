
void setup() 
{
  // Initial setup
  size (400,400);
  smooth();
}

void draw() 
{
  // Clear background
  background(255);
  smileyFace();
  x = x + 1;

  if (mousePressed)
  {
    // Change background color
    background(72, 203, 247);
    // Draw the snowman
    drawSnowman();
    // Turn stroke back on
    stroke(0);
    // Reset x so the Smiley Face is back on the left
    x = 50;
  }

}

var eyeSize = 50;
var x = 50;
void smileyFace() {
  // Smiley Face
  // Head
  strokeWeight(12);
  fill(247, 255, 0);
  ellipse(x, 200, 250, 250);
  // Left Eye
  fill(50, 255, 0);
  ellipse(x - 50, 150, eyeSize, eyeSize);
  // Right Eye
  fill(50, 255, 0);
  ellipse(x + 50, 150, eyeSize, eyeSize);
  // Mouth
  fill(255, 0, 0);
  arc(x, 250, 110, 50, 0, 180);
}

void drawSnowman() {
  noStroke();
  // Sun
  fill(230, 255, 0);
  ellipse(80, 64, 100, 100);
  // Bottom Ellipse
  fill(255, 255, 255); 
  ellipse(200, 300, 150, 150);
  // Middle Ellipse
  ellipse(200, 200, 100, 100);
  // Top Ellipse
  ellipse(200, 120, 75, 75);
  // Left Arm
  strokeWeight(5);
  stroke(250, 180, 240);
  line(160, 200, 100, 100);
  // Right Arm
  strokeWeight(5);
  stroke(250, 229, 240);
  line(240, 200, 300, 100);
}