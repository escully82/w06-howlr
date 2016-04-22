class Howl < ActiveRecord::Base

  validates :howl_content, presence:   true
  validates :howl_content, uniqueness: true
  validates :link,         presence:   true

  belongs_to :wolf

end
