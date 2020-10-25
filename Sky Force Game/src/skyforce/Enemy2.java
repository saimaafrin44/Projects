package skyforce;




	import java.awt.Color;
	import java.awt.Graphics;

	public class Enemy2 implements Enemy {
		private int x;
		private int y;
		
		public Enemy2(int x, int y){
			this.x = x;
			this.y = y;
			
		}
		public void tick(){
			y +=1;
			
		}
		public void render(Graphics g){
			
			g.fillOval(x,y,25,25);
			
			
			g.setColor(Color.BLUE);
			g.fillOval(4,80,25,25);
			g.setColor(Color.RED);
			g.fillOval(4,50,25,25);
		}
		public int getX(){
			return x;
		}
		public int getY(){
			return y;
		}
		@Override
		public void init() {
			// TODO Auto-generated method stub
			
		}
		@Override
		public void start() {
			// TODO Auto-generated method stub
			
		}
		@Override
		public void stop() {
			// TODO Auto-generated method stub
			
		}
		@Override
		public void render() {
			// TODO Auto-generated method stub
			
		}
		@Override
		public void run() {
			// TODO Auto-generated method stub
			
		}

	}


