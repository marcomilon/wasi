package elements

type Element interface {
	GetBody() string
	GetID() string
	SetID(id string)
}
