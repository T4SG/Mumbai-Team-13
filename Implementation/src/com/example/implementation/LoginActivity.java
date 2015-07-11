package com.example.implementation;

import java.util.HashMap;
import java.util.Map;

import network.CustomRequest;

import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.Volley;

public class LoginActivity extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);

    final TextView txtUsername = (TextView)findViewById(R.id.txtUsername);
    final TextView txtPassword = (TextView)findViewById(R.id.txtPassword);
    
    Button btnSignIn = (Button)findViewById(R.id.btnSign);
    
    btnSignIn.setOnClickListener(new View.OnClickListener() {
	
    	
		@Override
		public void onClick(View v) {
	
			
			
			String username = txtUsername.getText().toString();
			String password = txtPassword.getText().toString();
			
			Map<String,String> params = new HashMap<String,String>();
			params.put("username", username);
			params.put("password", password);
			
			CustomRequest jsonRequest = new CustomRequest(Request.Method.POST,"http://ec2-52-74-227-82.ap-southeast-1.compute.amazonaws.com/ndroid/login.php",params,new Response.Listener<JSONObject>() {

				@Override
				public void onResponse(JSONObject response) {
					// TODO Auto-generated method stub
					
					try {
						Toast.makeText(getApplicationContext(), ""+response.toString(), Toast.LENGTH_SHORT).show();
						int s =response.getInt("status");
					if(s!=0){
						Intent home_activity = new Intent(getApplicationContext(),HomeActivity.class);
						home_activity.putExtra("user_id", response.getString("user_id"));
						startActivity(home_activity);
						//Toast.makeText(getApplicationContext(), "Redirect to home",Toast.LENGTH_SHORT).show();
					}
						
					} catch (JSONException e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
				}
			}, new Response.ErrorListener() {

				@Override
				public void onErrorResponse(VolleyError error) {
					// TODO Auto-generated method stub
					Toast.makeText(getApplicationContext(), "Login Error: "+error.getMessage(),Toast.LENGTH_SHORT).show();
				}
			});
			RequestQueue queue = Volley.newRequestQueue(getApplication());
			queue.add(jsonRequest);
		}
	});
        
    }
}
