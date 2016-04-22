class Wolf < ActiveRecord::Base

  validates :name,        presence: true
  validates :name, uniqueness: { message: "This name has already been taken" }
  validates :description, presence: true
  validates :link,        presence: true

  has_many :howls

end
