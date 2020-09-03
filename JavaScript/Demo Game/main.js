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

  this.enemy = this.add.sprite(this.sys.game.config.width - 60, this.sys.game.config.height / 2, 'enemy');
  this.enemy.setScale(0.25);
}

gameScene.update = function() {
  if (this.input.activePointer.isDown) {
    this.player.x += this.playerSpeed;
  }

  if (Phaser.Geom.Intersects.RectangleToRectangle(this.player.getBounds(), this.enemy.getBounds())) {
    this.gameOver();
  }
}

gameScene.gameOver = function() {
  this.scene.restart();
}

let config = {
  type: Phaser.AUTO,
  width: 640,
  height: 360,
  scene: gameScene
};

const game = new Phaser.Game(config);
