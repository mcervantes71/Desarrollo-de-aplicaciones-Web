class Article < ApplicationRecord
  validates :title, presence: true, length: { in: 6..100 }
  validates :description, presence: true, length: { in: 10..200 }
end
