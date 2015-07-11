package com.example.implementation;

import java.util.HashMap;
import java.util.Map;

import network.CustomRequest;

import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;

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
			CustomRequest jsonRequest = new CustomRequest(Request.Method.POST,"http://10.242.166.118/login.php",params,new Response.Listener<JSONObject>() {

				@Override
				public void onResponse(JSONObject response) {
					// TODO Auto-generated method stub
					try {
						int s =response.getInt("status");
					if(s!=0){
						Toast.makeText(getApplicationContext(), "Redirect to home",Toast.LENGTH_SHORT).show();
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
					Toast.makeText(getApplicationContext(), "Login Error",Toast.LENGTH_SHORT).show();
				}
			});
		}
	});
        
    }
}
