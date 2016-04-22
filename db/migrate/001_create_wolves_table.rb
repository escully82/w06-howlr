# Wolves table
# will contain name, description and link
# associations are has_many howls
# contains no foriegn key

class CreateWolvesTable < ActiveRecord::Migration

  def change
    create_table :wolves do |t|
      t.string    :name,        null: false
      t.string    :description, null: false
      t.string    :link,        null: false
    end
  end

end
