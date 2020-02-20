package com.esri.samples.show_callout;

import javafx.application.Application;
import javafx.geometry.Point2D;
import javafx.scene.Scene;
import javafx.scene.input.MouseButton;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;
import javafx.util.Duration;

import com.esri.arcgisruntime.geometry.Point;
import com.esri.arcgisruntime.mapping.ArcGISMap;
import com.esri.arcgisruntime.mapping.Basemap;
import com.esri.arcgisruntime.mapping.view.Callout;
import com.esri.arcgisruntime.mapping.view.MapView;

public class ShowCalloutSample extends Application {

  private MapView mapView;

  // callout show and hide animation duration
  private static final Duration DURATION = new Duration(500);

  @Override
  public void start(Stage stage) {

    try {
      // create stack pane and application scene
      StackPane stackPane = new StackPane();
      Scene scene = new Scene(stackPane);

      // set title, size, and add scene to stage
      stage.setTitle("Show Callout Sample");
      stage.setWidth(800);
      stage.setHeight(700);
      stage.setScene(scene);
      stage.show();

      // create ArcGISMap with imagery basemap
      ArcGISMap map = new ArcGISMap(Basemap.createStreets());

      // create a view and set map to it
      mapView = new MapView();
      mapView.setMap(map);

      // click event to display the callout
      mapView.setOnMouseClicked(e -> {
        // check that the primary mouse button was clicked and user is not
        // panning
        if (e.isStillSincePress() && e.getButton() == MouseButton.PRIMARY) {
          // create a point from where the user clicked
          Point2D point = new Point2D(e.getX(), e.getY());

          // create a map point from a point
          Point mapPoint = mapView.screenToLocation(point);

          // get the map view's callout
          Callout callout = mapView.getCallout();

          if (!callout.isVisible()) {
            // set the callout's details
            callout.setTitle("Location");
            callout.setDetail(String.format("x: %.2f, y: %.2f", mapPoint.getX(), mapPoint.getY()));

            // show the callout where the user clicked
            callout.showCalloutAt(mapPoint, DURATION);
          } else {
            // hide the callout
            callout.dismiss();
          }
        }
      });

      // add map view and control panel to stack pane
      stackPane.getChildren().addAll(mapView);

    } catch (Exception e) {
      // on any error, print the stack trace
      e.printStackTrace();
    }
  }