package element

type Element interface {
	GetBody() string
}

type Service interface {
	Persist(Element)
	ReadAll()
}

type Repository interface {
	Create(Element)
	List()
}

