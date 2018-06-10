// Tim Leavey

// SETUP
void setup() 
{
  // Initial setup
  size (400,400);
  smooth();
}

// DRAW
void draw() 
{
  // Clear background
  background(255);
  welcomeMsg();
  timMsg();
  smileyFace();
  ellipseChase();
  stroke(0);
  x = x + 2;

  if (mousePressed)
  {
    // Change background color
    background(72, 203, 247);
    // Draw the snowman
    drawSnowman();
    helpMsg();
    // Turn stroke back on
    stroke(0);
    // Reset x so the Smiley Face is back on the left
    x = -173;
    if (sunSize >= 950) {
      background(230, 255, 0);
    }
  }
}

// FUNCTIONS
void welcomeMsg() {
  fill(generateRandomInt(), generateRandomInt(), generateRandomInt());
  textSize(15);
  text("Click on this canvas!", 140, 50);
}

void timMsg() {
  fill(0, 0, 0);
  textSize(18);
  text("Tim's JS Animation", 140, 375);
}

void helpMsg() {
  fill(0, 0, 0);
  textSize(20);
  text("I'M TRAPPED!!!", 200, 70);  
}

int generateRandomInt() {
  var randomValue = random(0, 255);
  randomValue = int(randomValue);
  return randomValue;
}

void ellipseChase() {
  noStroke();
  fill(generateRandomInt(), generateRandomInt(), generateRandomInt());
  ellipse(mouseX, mouseY, 20, 20);
  var label = mouseX + " , " + mouseY;
  text(label, mouseX + 15, mouseY + 3);
}

var eyeSize = 50;
var x = -173;
void smileyFace() {
  // Smiley Face
  // Head
  if (x >= 550) {
    x = -173
  }
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

var sunSize = 100;
void drawSnowman() {
  noStroke();
  // Sun
  fill(230, 255, 0);
  ellipse(80, 64, sunSize += 1, sunSize += 1);
  // Bottom Ellipse
  fill(255, 255, 255); 
  ellipse(mouseX, 300, 150, 150);
  // Middle Ellipse
  ellipse(mouseX, 200, 100, 100);
  // Top Ellipse
  ellipse(mouseX, 120, 75, 75);
  // Left Eye
  fill(0, 0, 0);
  ellipse(mouseX - 15, 110, 10, 10);
  // Right Eye
  ellipse(mouseX + 15, 110, 10, 10);
  // Mouth
  ellipse(mouseX, 130, 20, 20);
  // Left Arm
  strokeWeight(5);
  stroke(250, 180, 240);
  line(mouseX - 40, 200, 100, 100);
  // Right Arm
  strokeWeight(5);
  stroke(250, 229, 240);
  line(mouseX + 40, 200, 300, 100);
}

