package com.lab10;

import static spark.Spark.get;
import static spark.Spark.*;
import org.json.JSONObject;
/**
 * Hello world!
 *
 */
public class App 
{
    public static void main( String[] args )
    {   

        get("/hello", (req, res) -> "Hello world");
            
        }
        // post("/hello", (req, res) -> {
        //     res.type("application/json");
        //     JSONObject body = new JSONObject(req.body());
        //     return body;
        // });
    }

