package skyforce;




	import java.awt.Color;
	import java.awt.Graphics;

	public class Enemy3 implements Enemy {
		
		
		private int x1;
		private int y1;
		
		public Enemy3(int x1, int y1){
			this.x1 = x1;
			this.y1 = y1;
			
		}
		public void tick(){
			 y1 += 1;
			
		}
		public void render(Graphics g){
			
			//g.fillOval(x,y,25,25);
			
			g.setColor(Color.black); 
			g.fillOval(x1, y1, 20, 20); 
			
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
		@Override
		public int getX() {
			// TODO Auto-generated method stub
			return 0;
		}
		@Override
		public int getY() {
			// TODO Auto-generated method stub
			return 0;
		}

	}


