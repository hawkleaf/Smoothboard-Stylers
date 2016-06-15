@extends('layout')

@section('content')
    <div class="base__header">
        <h2 class="base__title">About us</h2>
        <a href="/customer/create" class="base__button pjax">Newsletter</a>
    </div>
    <div class="featured__container">
        <div class="featured__col">
            <img src="{{asset('image/contact.jpeg')}}" alt="" style="width: 350px; height: 350px; border-radius: 50%; border: 4px solid black; align-self: center" />
            <h3 class="base__title">Where are we situated?</h3>
            <p>
                You can find us at 370 Oak Lane Trumbull, CT 06611 in the United States. We are a rather small company and our workforce is about 10 people.
            </p>
        </div>
        <div class="featured__col">
            <h3 class="base__title">Our passion</h3>
            <p>
                Creativity is a fucking work-ethic. To go partway is easy, but mastering anything requires hard fucking work. A good fucking composition is the result of a hierarchy consisting of clearly contrasting elements set with distinct alignments containing irregular intervals of negative space. Paul Rand once said, “The public is more familiar with bad fucking design than good design. It is, in effect, conditioned to prefer bad design, because that is what it lives with. The new becomes threatening, the old reassuring.” If you fucking give up, you will achieve nothing. You won’t get good at anything by doing it a lot fucking aimlessly. Widows and orphans are terrible fucking tragedies, both in real life and definitely in typography. Saul Bass on failure: Failure is built into creativity… the creative act involves this element of ‘newness’ and ‘experimentalism,’ then one must expect and accept the fucking possibility of failure. What’s important is the fucking drive to see a project through no matter what. Don’t fucking lie to yourself. When you design, you have to draw on your own fucking life experiences. If it’s not something you would want to read/look at/use then why fucking bother? Nothing of value comes to you
            </p>
        </div>
    </div>
@stop
