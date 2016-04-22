# Howls table
# will contain howl_content, link, wolf_id, timestamp, and likes
# associations are belongs to wolf
# will contain foriegn key(wolf_id)

class CreateHowlsTable < ActiveRecord::Migration

  def change
    create_table :howls do |t|
      t.string     :howl_content, null: false
      t.string     :link,         null: false
      t.integer    :wolf_id,       null: false
      t.integer    :likes
      t.timestamps
    end
  end

end
