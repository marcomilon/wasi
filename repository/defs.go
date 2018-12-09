package repository

type Repository interface {
	Store(Element)
	List()
}
