package skyforce;

import java.awt.Graphics;

public interface Enemy {
        
	
	public void init();

	public void start();

	
	public  void stop();
	
	public void tick();
		
	public void render();
		
	public void run();

	public int getX();

	public int getY();

	public void render(Graphics g);
		
}
