let gameScene = new Phaser.Scene('Game');

gameScene.init = function() {
  this.playerSpeed = 1.5;
  this.enemySpeed = 2;
  this.enemyMaxY = 280;
  this.enemyMinY = 80;
}

gameScene.preload = function() {
  this.load.image('background', 'img/background.png');
  this.load.image('player', 'img/spaceship.png');
  this.load.image('enemy', 'img/enemy.png');
}

gameScene.create = function() {
  this.add.sprite(320, 180, 'background');

  this.player = this.add.sprite(60, this.sys.game.config.height / 2, 'player');
  this.player.setScale(0.15);

  // player is alive
  this.isPlayerAlive = true;

  this.enemy = this.add.sprite(this.sys.game.config.width - 60, this.sys.game.config.height / 2, 'enemy');
  this.enemy.setScale(0.25);
  this.enemies = this.add.group({
    key: 'enemy',
    repeat: 2,
    setXY: {
      x: 250,
      y: 100,
      stepX: 100,
      stepY: 40,
    }
  });
  Phaser.Actions.ScaleXY(this.enemies.getChildren(), -0.7, -0.7);

  //reset camera effects
  this.cameras.main.resetFX();
}

gameScene.update = function() {
  // only if the player is alive
  if (!this.isPlayerAlive) {
    return;
  }

  if (this.input.activePointer.isDown) {
    this.player.x += this.playerSpeed;
  }

  let enemies = this.enemies.getChildren();
  let numEnemies = enemies.length;

  for (let i = 0; i < numEnemies; i++) {
    // enemies[i].y += enemies[i].speed;
    //
    // if (enemies[i].y >= this.enemyMaxY && enemies[i].speed > 0) {
    //   enemies[i].speed *= -1;
    // } else if (enemies[i].y <= this.enemyMinY && enemies[i].speed < 0) {
    //   enemies[i].speed *= -1;
    // }
    // enemies collision
    if (Phaser.Geom.Intersects.RectangleToRectangle(this.player.getBounds(), enemies[i].getBounds())) {
      this.gameOver();
      break;
    }
  }

  // set speeds
  Phaser.Actions.Call(this.enemies.getChildren(), function(enemy) {
    enemy.speed = Math.random() * 2 + 1;
  }, this);
}

gameScene.gameOver = function() {
  // flag to set player is dead
  this.isPlayerAlive = false;

  // shake the camera
  this.cameras.main.shake(500);

  // fade the camera
  this.time.delayedCall(250, function() {
    this.cameras.main.fade(250);
  }, [], this);

  // restart the game
  this.time.delayedCall(500, function() {
    this.scene.restart();
  }, [], this);
}

let config = {
  type: Phaser.AUTO,
  width: 640,
  height: 360,
  scene: gameScene
};

const game = new Phaser.Game(config);
