# Index

get '/wolves' do
  @wolves = Wolf.all
  erb :"wolves/index"
end

# New

get '/wolves/new' do
  @wolves = Wolf.new
  erb :"wolves/new"
end

# Create

post '/wolves' do
  # create wolf object
  @wolf = Wolf.new(params)

  if @wolf.save
    redirect to ('/wolves')
  else
    erb :"wolves/new"
  end
end

# Show

get '/wolves/:id' do
  @wolf = Wolf.find_by_id(params['id'])
  erb :"wolves/show"
end

# Edit

get '/wolves/:id/edit' do
  @wolves = Wolf.find_by_id(params['id'])
  erb :"wolves/edit"
end

post '/wolves/:id' do
  @wolf = Wolf.find_by_id(params['id'])

  if @wolf.update_attributes(name:        params['name'],
                             description: params['description'],
                             link:        params['link'])
     redirect to("wolves/#{wolf.id}")
  else
    erb :"wolves/edit"
  end
end

# delete route

delete "/wolves/:id/?" do
  @wolf = Wolf.find_by_id(params['id'])
  @wolf.destroy
  redirect to("/wolves")
end
