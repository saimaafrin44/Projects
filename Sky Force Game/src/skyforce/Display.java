package skyforce;


	import java.awt.Canvas;
	import java.awt.Color;
	import java.awt.Dimension;

	import javax.swing.JFrame;

	public class Display {
		
		    public Canvas canvas;
		    private String title;
			private int width;
			private int height;
			public static JFrame frame; 

			public Display(String title,int width,int height){ 
				this.title=title;
				this.width=width;
				this.height=height;	
				createDisplay();
			}
			public void createDisplay(){
				frame=new JFrame( title);
				frame.setSize(width, height);
				frame.setLocationRelativeTo(null);
				frame.setResizable(false); 
				frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);;
			    frame.setVisible(true);
				canvas=new Canvas();
				canvas.setPreferredSize(new Dimension(width, height)); 
				canvas.setBackground(new Color(192, 192, 192)); 
				canvas.setFocusable(false); 
				frame.add(canvas);
				frame.pack();
		}
			public Canvas getCanvas(){
				return canvas;
			}

		

		
	}




