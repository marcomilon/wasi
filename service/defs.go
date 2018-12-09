package service

type Service interface {
	Create() Element
	Persist(Element)
	GetAll()
}
