let gameScene = new Phaser.Scene('Game');

let config = {
  type: Phaser.AUTO,
  width: 640,
  height: 360,
  scene: gameScene
};

const game = new Phaser.Game(config);
