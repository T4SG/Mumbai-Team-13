package com.example.implementation;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

public class SchoolListAdapter extends BaseAdapter{

	Context context;
	String[] names;
	String[] image_links;
	String[] locations;
	int[] budgets;
	int[] spents;
	
	private static LayoutInflater inflater=null;
	public SchoolListAdapter(HomeActivity mainactivity,String[] names,int[] budgets,int[] spents,String[] locations,String[] imagePaths){
		this.context = mainactivity.getBaseContext();
		this.names = names;
		this.image_links = imagePaths;
		this.locations = locations;
		this.budgets = budgets;
		this.spents = spents;
		inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
		
	}
	
	@Override
	public int getCount() {
		// TODO Auto-generated method stub
		return this.names.length;
	}

	@Override
	public Object getItem(int position) {
		// TODO Auto-generated method stub
		return position;
	}

	@Override
	public long getItemId(int position) {
		// TODO Auto-generated method stub
		return position;
	}

	@Override
	public View getView(int arg0, View arg1, ViewGroup arg2) {
		// TODO Auto-generated method stub
		Holder holder = new Holder();
		return null;
	}
	
	class Holder{
		TextView name;
		TextView location;
		TextView budget;
		TextView spent;
		ImageView imageView;
	}

	
}
