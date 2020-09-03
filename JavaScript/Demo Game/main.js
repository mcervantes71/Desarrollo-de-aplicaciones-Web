let gameScene = new Phaser.Scene('Game');

gameScene.preload = function() {
  this.load.image('background', 'img/background.png');
}

gameScene.create = function() {
  this.add.sprite(320, 180, 'background');
}

let config = {
  type: Phaser.AUTO,
  width: 640,
  height: 360,
  scene: gameScene
};

const game = new Phaser.Game(config);
