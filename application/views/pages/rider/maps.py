import folium

#location
m=folium.Map(location=[14.5995,120.9842], zoom_start=12 )

tooltip='Available Market in Metro Manila'
#marker
folium.Marker ([14.6177,120.9698],popup='<strong>Pritil Market</strong>'
            ,tooltip=tooltip,icon=folium.Icon(color='purple')).add_to(m),
folium.Marker ([14.6203,120.9764],popup='<strong>Blumentritt Market</strong>'
            ,tooltip=tooltip,icon=folium.Icon(color='red')).add_to(m),
folium.Marker ([14.5984,120.9830],popup='<strong>Quiapo Market</strong>'
            ,tooltip=tooltip,icon=folium.Icon(color='blue')).add_to(m),
folium.Marker ([14.6563,120.0005],popup='<strong>Quiapo Market</strong>'
            ,tooltip=tooltip,icon=folium.Icon(color='darkred')).add_to(m),
folium.Marker ([14.6882,121.0013],popup='<strong>Quiapo Market</strong>'
            ,tooltip=tooltip,icon=folium.Icon(color='green')).add_to(m),

#Generate map
m.save('map.php')