
edge = Struct.new(:source, :dest, :value)

vertex = ['Internet','Cathedral', 'Dott','Bolt', 'Belle','Dip','Arch','Vista','Porter']

edges = [
  edge['Internet', 'Cathedral', 26],          
  edge['Belle', 'Dott', 37],
  edge['Internet', 'Dott', 33],        
  edge['Belle', 'Dip', 35],
  edge['Internet', 'Bolt', 35],         
  edge['Belle', 'Arch', 18],
  edge['Cathedral', 'Belle', 21],       
  edge['Arch', 'Dip', 42],
  edge['Arch', 'Vista', 36],            
  edge['Vista', 'Dip', 12], 
  edge['Vista', 'Porter', 22],          
  edge['Dip', 'Porter', 17],
  edge['Dip', 'Dott', 8],               
  edge['Porter', 'Dott', 15],
  edge['Porter', 'Bolt', 16],           
  edge['Bolt', 'Dott', 13],
  edge['Cathedral', 'Dott', 38]
]


edges = edges.sort_by {|a| a.value}
n= vertex.length
T = []
clusters ={}

for v in vertex
	clusters[v] = v
end

while (T.length < (n-1)) do
	e = edges.delete_at(0)
	if (e != nil)
		sr = e['source']
		dt = e['dest']
		c_sr = clusters[sr]			
		c_dt = clusters[dt]
		if(c_sr != c_dt)
			T.push (e)
			for v in vertex
				if(clusters[v]==c_dt)
					clusters[v] = c_sr
				end
			end
		end
	end
end 
puts (T)
