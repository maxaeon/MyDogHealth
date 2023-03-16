const router = require("express").Router();
const { Calendar, Appointments } = require("../../models");
const withAuth = require("../../utils/auth");


router.get('/', async (req, res) => {
    const allCalendars = Calendar.findAll({
        include: [{ model: Appointments }]
    })
    res.status(200).json(allCalendars)

})
router.post('/:id', async (req, res) => {
    const { month, events } = req.body.data
    const newData = {
        user: req.session.user_id,
        events: month
    }
    console.log(newData)

    res.end()
})

module.exports = router
