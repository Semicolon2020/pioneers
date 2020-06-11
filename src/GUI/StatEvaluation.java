/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Enfant;
import com.codename1.charts.ChartComponent;
import com.codename1.charts.models.CategorySeries;
import com.codename1.charts.renderers.DefaultRenderer;
import com.codename1.charts.renderers.SimpleSeriesRenderer;
import com.codename1.charts.util.ColorUtil;
import com.codename1.charts.views.PieChart;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import Entities.Evaluation;



import Service.EvaluationService;
import com.mycompany.myapp.MyApplication;
import Entities.User;
import com.codename1.ui.FontImage;
import java.util.ArrayList;

/**
 *
 * @author MehdiS
 */
public class StatEvaluation extends Form {

    Form current;
    ArrayList<Evaluation> ListA;
    ArrayList<Enfant> ListE;
    
    ComboBox<String> nom;
    int i = 0;

    StatEvaluation(Form previous) {
         current = this;
        setLayout(BoxLayout.y());
        getToolbar().addMaterialCommandToLeftBar("back",FontImage.MATERIAL_ARROW_BACK, ev -> previous.showBack());
        ListE = EvaluationService.getInstance().getEnfantParent("20202020");
        nom = new ComboBox("Mes Enfants");
        for(int i=0;i<ListE.size();i++)
        { nom.addItem(ListE.get(i).getPrenom());
        }
       

        
        nom.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
               ListA = EvaluationService.getInstance().getEvalEnf(nom.getSelectedItem());
             
       

                System.out.println(ListA);
       // double[] values = new double[]{12, 14, 11, 10, 19};

                // Set up the renderer
                int[] colors = new int[]{ColorUtil.BLUE, ColorUtil.GREEN, ColorUtil.MAGENTA, ColorUtil.YELLOW, ColorUtil.CYAN};
                DefaultRenderer renderer = buildCategoryRenderer(colors);
                renderer.setZoomButtonsVisible(true);
                renderer.setZoomEnabled(true);
                renderer.setChartTitleTextSize(20);
                renderer.setDisplayValues(true);
                renderer.setShowLabels(true);
                SimpleSeriesRenderer r = renderer.getSeriesRendererAt(0);
                r.setGradientEnabled(true);
                r.setGradientStart(0, ColorUtil.BLUE);
                r.setGradientStop(0, ColorUtil.GREEN);
                r.setHighlighted(true);

                // Create the chart ... pass the values and renderer to the chart object.
                PieChart chart = new PieChart(buildCategoryDataset("Project budget", ListA), renderer);

                // Wrap the chart in a Component so we can add it to a form
                ChartComponent c = new ChartComponent(chart);

    // Create a form and show it.
                add(c);
            }
        });
        add(nom);
    }

    /**
     * Creates a renderer for the specified colors.
     */
    private DefaultRenderer buildCategoryRenderer(int[] colors) {
        DefaultRenderer renderer = new DefaultRenderer();
        renderer.setLabelsTextSize(30);
        //renderer.setLegendTextSize(30);
        renderer.setLabelsColor(ColorUtil.BLACK);
        renderer.setMargins(new int[]{20, 30, 15, 0});
        for (int color : colors) {
            SimpleSeriesRenderer r = new SimpleSeriesRenderer();
            r.setColor(color);
            renderer.addSeriesRenderer(r);
        }
        return renderer;
    }

    /**
     * Builds a category series using the provided values.
     *
     * @param title the series titles
     * @param ListE  the values
     * @return the category series
     */
    protected CategorySeries buildCategoryDataset(String title, ArrayList<Evaluation> ListE) {
        CategorySeries series = new CategorySeries(title);
        series.clear();
        
        for(int i=0;i<ListE.size();i++)
        { 
              series.add(ListE.get(i).getId_ac().getNom(), ListE.get(i).getScore());
        }

           
          
        

        return series;
    }

}
