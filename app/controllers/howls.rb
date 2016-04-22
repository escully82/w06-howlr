
# New

get '/howls/new' do
  @howl = Howl.new
  @wolves = Wolf.all
  erb :"howls/new"
end

# Create

post '/howls' do
  # create howl object
  @howl = Howl.new(params)
  if @howl.save
    redirect to('/howls')
  else
    @wolves = Wolf.all
    erb :"howls/new"
  end
end

# Index

get '/howls' do
  @howls = Howl.all
  erb :"howls/index"
end

# Show

get '/howls/:id' do
  @howl  = Howl.find_by_id(params['id'])
  @howls = Howl.all
  erb :"howls/show"
end

# Edit

get '/howls/:id/edit' do
  @howl = Howl.find_by_id(params['id'])
  @wolves = Wolf.all
  erb :"howls/edit"
end

post '/howls/:id' do
  @howl = Howl.find_by_id(params['id'])
  @wolves = Wolf.all
  @wolf = Wolf.find_by_id(parmas['id'])

  if @howl.update_attributes(howl_content: params['howl_content'],
                             link:         params['link'])
      redirect to("/howls/#{howl.id}")
  else
    erb :"howls/edit"
  end
end

# delete route

delete "/howls/:id/?" do
  @howl = Howl.find_by_id(params['id'])
  @howl.destroy
  redirect to("/howls")
end
