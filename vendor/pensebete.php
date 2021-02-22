<?php
public function getNumeroDispo()
{
    $date       = new \DateTime;
    $debutNum   = $date->format('Ym');
    $qb = $this->createQueryBuilder('f')
    ->add('select', '(f.numero)as num');
    $qb->where($qb->expr()->like('f.numero', ':numero'))
            ->setParameter('numero', '%'.$debutNum.'%')
            ->orderBy('f.numero','DESC')
            ->setMaxResults(1);
             
    $num = $qb->getQuery()
            ->getResult();
    if(count($num)>>0)  {return $num[0]['num']+1;}
    else                {return $debutNum."01";}
     
}
public function newAction()
    {
        $entity     = new Facture();
        $em         = $this->getDoctrine()->getManager();
        $numero     = $em->getRepository('EreDigitaleCommercialBundle:Facture')->getNumeroDispo();
        $entity->setNumero($numero);
        $form   = $this->createForm(new FactureType(), $entity);
        return $this->render('EreDigitaleCommercialBundle:Facture:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    ->add('Count1', 'integer', [
        'data'        => 1,
        'constraints' => [
            new NotBlank(),
            new NotNull(),
        ],
    ])
    ->add('Count2', 'integer', [
        'constraints' => [
            new NotBlank(),
            new NotNull(),
        ],
    ])
    ->add('Count3', 'integer', [
        'data'        => 0,
        'constraints' => [
            new NotBlank(),
            new NotNull(),
        ],
    ])
    //rm -f .git/index.lock