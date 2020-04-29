/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package myjava;

import java.applet.Applet;
import java.awt.*;
import static java.lang.Math.cos;
import static java.lang.Math.sin;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author admin
 */
public class animation_square extends Applet {

    /**
     * Initialization method that will be called after the applet is loaded into
     * the browser.
     */
    int a1[] = {50, 50};
    int a2[] = {100, 50};
    int b1[] = {50, 10};
    int b2[] = {100, 10};

    int o1[] = {50, 50};
    int o2[] = {100, 50};
    int ox1[] = {50, 10};
    int ox2[] = {100, 10};

    int mp[] = {75, 30};
    int angle = 0;

    @Override
    public void paint(Graphics g) {
        g.drawLine(a1[0], a1[1], a2[0], a2[1]);
        g.drawLine(a1[0], a1[1], b1[0], b1[1]);
        g.drawLine(b1[0], b1[1], b2[0], b2[1]);
        g.drawLine(a2[0], a2[1], b2[0], b2[1]);

    }

    @Override
    public void init() {

        thread t1 = new thread();
        Thread t = new Thread(t1);
        t.start();
        // TODO start asynchronous download of heavy resources
    }

    class thread implements Runnable {

        public void run() {
            for (int i = 1; i <= 360; i++) {
                angle = angle + 5;

                float rad = (float) (angle * 3.14 / 180);

                a1[0] = (int) ((mp[0] + (o1[0] - mp[0]) * cos(rad)) - ((o1[1] - mp[1]) * sin(rad)));
                a1[1] = (int) ((mp[1] + (o1[0] - mp[0]) * sin(rad)) + ((o1[1] - mp[1]) * cos(rad)));

                a2[0] = (int) ((mp[0] + (o2[0] - mp[0]) * cos(rad)) - ((o2[1] - mp[1]) * sin(rad)));
                a2[1] = (int) ((mp[1] + (o2[0] - mp[0]) * sin(rad)) + ((o2[1] - mp[1]) * cos(rad)));

                b1[0] = (int) ((mp[0] + (ox1[0] - mp[0]) * cos(rad)) - ((ox1[1] - mp[1]) * sin(rad)));
                b1[1] = (int) ((mp[1] + (ox1[0] - mp[0]) * sin(rad)) + ((ox1[1] - mp[1]) * cos(rad)));

                b2[0] = (int) ((mp[0] + (ox2[0] - mp[0]) * cos(rad)) - ((ox2[1] - mp[1]) * sin(rad)));
                b2[1] = (int) ((mp[1] + (ox2[0] - mp[0]) * sin(rad)) + ((ox2[1] - mp[1]) * cos(rad)));

                repaint();
                try {
                    Thread.sleep(100);
                } catch (InterruptedException ex) {
                    Logger.getLogger(animation_square.class.getName()).log(Level.SEVERE, null, ex);
                }
            }

        }
    }

    // TODO overwrite start(), stop() and destroy() methods
}
